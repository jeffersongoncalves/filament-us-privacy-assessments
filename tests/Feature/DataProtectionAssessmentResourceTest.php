<?php

use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\DataProtectionAssessmentActions;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\DataProtectionAssessmentResource;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\Pages\CreateDataProtectionAssessment;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\Pages\EditDataProtectionAssessment;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\Pages\ListDataProtectionAssessments;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\UsPrivacyAssessmentsPlugin;
use JeffersonGoncalves\UsPrivacyAssessments\Enums\AssessmentStatus;
use JeffersonGoncalves\UsPrivacyAssessments\Enums\RiskLevel;
use JeffersonGoncalves\UsPrivacyAssessments\Models\DataProtectionAssessment;
use JeffersonGoncalves\UsPrivacyNotices\Models\ProcessingActivity;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Anna Schmidt', 'email' => 'dpo@example.com']));
});

function risky(): DataProtectionAssessment
{
    return DataProtectionAssessment::create([
        'title' => 'Fraud scoring',
        'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => 2, 'impact' => 3, 'residual_likelihood' => 1, 'residual_impact' => 3]],
    ]);
}

it('creates an assessment linked to a processing activity, with scored risks', function () {
    $activity = ProcessingActivity::create(['name' => 'Fraud scoring', 'purpose' => 'Prevent fraud']);

    Livewire::test(CreateDataProtectionAssessment::class)
        ->fillForm([
            'title' => 'Fraud scoring',
            'processing_activity_id' => $activity->getKey(),
            'benefits' => 'Fewer chargebacks for everyone',
            'necessity' => 'Only payment metadata',
            'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => '2', 'impact' => '3', 'residual_likelihood' => '1', 'residual_impact' => '3']],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $assessment = DataProtectionAssessment::sole();

    expect($assessment->processingActivity->is($activity))->toBeTrue()
        ->and($assessment->highestRisk(residual: false))->toBe(RiskLevel::High)
        ->and($assessment->highestRisk())->toBe(RiskLevel::Medium)
        ->and($assessment->benefits)->toBe('Fewer chargebacks for everyone');
});

it('lists assessments with their risk levels', function () {
    $assessment = risky();

    Livewire::test(ListDataProtectionAssessments::class)
        ->assertCanSeeTableRecords([$assessment])
        ->assertSee('High')
        ->assertSee('Medium')
        ->assertSee('Draft');
});

it('approves with the approver name', function () {
    $assessment = risky();

    Livewire::test(EditDataProtectionAssessment::class, ['record' => $assessment->getKey()])
        ->callAction('approve', ['approved_by' => 'Anna Schmidt (DPO)'])
        ->assertHasNoActionErrors();

    expect($assessment->fresh())
        ->status->toBe(AssessmentStatus::Approved)
        ->approved_by->toBe('Anna Schmidt (DPO)')
        ->next_review_at->not->toBeNull();
});

it('refuses to approve without risks', function () {
    $assessment = DataProtectionAssessment::create(['title' => 'Empty']);

    Livewire::test(EditDataProtectionAssessment::class, ['record' => $assessment->getKey()])
        ->callAction('approve', ['approved_by' => 'DPO']);

    expect($assessment->fresh()->status)->toBe(AssessmentStatus::Draft);
});

it('exports one assessment as JSON', function () {
    $assessment = risky();

    Livewire::test(EditDataProtectionAssessment::class, ['record' => $assessment->getKey()])
        ->callAction('export')
        ->assertFileDownloaded('data-protection-assessment-'.$assessment->getKey().'.json');
});

it('shows the processing activities that still need an assessment', function () {
    ProcessingActivity::create(['name' => 'Telehealth', 'purpose' => 'Appointments', 'models' => [TestUser::class]]);

    Livewire::test(ListDataProtectionAssessments::class)->assertActionVisible('candidates');

    expect((string) DataProtectionAssessmentActions::candidates()->getModalContent())
        ->toContain('Telehealth')
        ->toContain('sensitive data');
});

it('applies the fluent plugin options', function () {
    UsPrivacyAssessmentsPlugin::get()->navigationGroup('US')->slug('assessments');

    expect(DataProtectionAssessmentResource::getNavigationGroup())->toBe('US')
        ->and(DataProtectionAssessmentResource::getSlug())->toBe('assessments');
});
