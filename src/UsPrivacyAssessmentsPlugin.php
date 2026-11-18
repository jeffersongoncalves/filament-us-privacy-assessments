<?php

namespace JeffersonGoncalves\Filament\UsPrivacyAssessments;

use Filament\Contracts\Plugin;
use Filament\Panel;

class UsPrivacyAssessmentsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-us-privacy-assessments';
    }

    public function register(Panel $panel): void
    {
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }
}
