<?php

namespace JeffersonGoncalves\Filament\UsPrivacyAssessments\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\UsPrivacyAssessmentsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                UsPrivacyAssessmentsPlugin::make(),
            ]);
    }
}
