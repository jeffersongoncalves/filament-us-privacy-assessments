<?php

namespace JeffersonGoncalves\Filament\UsPrivacyAssessments\Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Authenticatable;
use JeffersonGoncalves\UsPrivacy\Attributes\PersonalData;
use JeffersonGoncalves\UsPrivacy\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\UsPrivacy\Contracts\HasPersonalData;
use JeffersonGoncalves\UsPrivacy\Enums\DataCategory;

#[PersonalData('email')]
#[PersonalData('health_notes', category: DataCategory::Sensitive)]
class TestUser extends Authenticatable implements HasPersonalData
{
    use InteractsWithPersonalData;

    protected $table = 'users';

    protected $guarded = [];

    public $timestamps = false;
}
