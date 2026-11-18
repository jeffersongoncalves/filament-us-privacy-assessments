<?php

namespace JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\DataProtectionAssessmentActions;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\DataProtectionAssessmentResource;

class ListDataProtectionAssessments extends ListRecords
{
    protected static string $resource = DataProtectionAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DataProtectionAssessmentActions::candidates(),
            CreateAction::make(),
        ];
    }
}
