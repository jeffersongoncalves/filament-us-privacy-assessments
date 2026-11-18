<?php

namespace JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments;

use Filament\Actions\Action;
use Filament\Actions\MountableAction;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action as TableAction;
use Illuminate\Support\HtmlString;
use JeffersonGoncalves\UsPrivacyAssessments\AssessmentManager;
use JeffersonGoncalves\UsPrivacyAssessments\Enums\AssessmentStatus;
use JeffersonGoncalves\UsPrivacyAssessments\Models\DataProtectionAssessment;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DataProtectionAssessmentActions
{
    public static function approve(string $class = Action::class): Action|TableAction
    {
        return $class::make('approve')
            ->label(DataProtectionAssessmentResource::label('actions.approve'))
            ->icon('heroicon-o-check-badge')
            ->color('success')
            ->visible(fn (DataProtectionAssessment $record): bool => $record->status === AssessmentStatus::Draft || $record->isReviewDue())
            ->form([
                TextInput::make('approved_by')
                    ->label(DataProtectionAssessmentResource::label('fields.approved_by'))
                    ->default(fn (): ?string => auth()->user()?->getAttribute('name'))
                    ->required()
                    ->maxLength(255),
            ])
            ->action(function (DataProtectionAssessment $record, array $data, MountableAction $action): void {
                if ($record->scoredRisks() === []) {
                    Notification::make()->danger()->title(DataProtectionAssessmentResource::label('notifications.no_risks'))->send();
                    $action->halt();
                }

                $record->approve((string) $data['approved_by']);
                Notification::make()->success()->title(DataProtectionAssessmentResource::label('notifications.approved'))->send();
            });
    }

    public static function export(string $class = Action::class): Action|TableAction
    {
        return $class::make('export')
            ->label(DataProtectionAssessmentResource::label('actions.export'))
            ->icon('heroicon-o-arrow-down-tray')
            ->color('gray')
            ->action(fn (DataProtectionAssessment $record): StreamedResponse => response()->streamDownload(function () use ($record): void {
                echo json_encode(app(AssessmentManager::class)->export($record), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            }, 'data-protection-assessment-'.$record->getKey().'.json', ['Content-Type' => 'application/json']));
    }

    /**
     * Processing activities used for targeted advertising, sale, profiling or sensitive data, with no assessment yet.
     */
    public static function candidates(string $class = Action::class): Action|TableAction
    {
        return $class::make('candidates')
            ->label(DataProtectionAssessmentResource::label('actions.candidates'))
            ->icon('heroicon-o-exclamation-triangle')
            ->color('warning')
            ->badge(fn (): ?int => count(app(AssessmentManager::class)->candidates()) ?: null)
            ->modalHeading(DataProtectionAssessmentResource::label('actions.candidates'))
            ->modalDescription(DataProtectionAssessmentResource::label('help.candidates'))
            ->modalContent(function (): HtmlString {
                $candidates = app(AssessmentManager::class)->candidates();

                if ($candidates === []) {
                    return new HtmlString('<p>'.e(DataProtectionAssessmentResource::label('help.no_candidates')).'</p>');
                }

                $items = array_map(fn (array $candidate): string => '<li><strong>'.e($candidate['activity']->name).'</strong>: '
                    .e(implode(', ', array_map(fn (string $reason): string => DataProtectionAssessmentResource::label("reasons.{$reason}"), $candidate['reasons']))).'</li>', $candidates);

                return new HtmlString('<ul style="list-style: disc; padding-inline-start: 1.25rem;">'.implode('', $items).'</ul>');
            })
            ->modalSubmitAction(false)
            ->modalCancelActionLabel(DataProtectionAssessmentResource::label('actions.close'));
    }
}
