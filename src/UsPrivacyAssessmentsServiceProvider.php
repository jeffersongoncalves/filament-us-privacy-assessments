<?php

namespace JeffersonGoncalves\Filament\UsPrivacyAssessments;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class UsPrivacyAssessmentsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-us-privacy-assessments';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
