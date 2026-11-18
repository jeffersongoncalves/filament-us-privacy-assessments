<?php

namespace JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\DataProtectionAssessmentActions;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\DataProtectionAssessmentResource;

class EditDataProtectionAssessment extends EditRecord
{
    protected static string $resource = DataProtectionAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DataProtectionAssessmentActions::approve(),
            DataProtectionAssessmentActions::export(),
            DeleteAction::make(),
        ];
    }
}
