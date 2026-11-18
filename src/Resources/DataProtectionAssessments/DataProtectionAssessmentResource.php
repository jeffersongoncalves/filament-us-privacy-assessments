<?php

namespace JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments;

use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\Pages\CreateDataProtectionAssessment;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\Pages\EditDataProtectionAssessment;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\Resources\DataProtectionAssessments\Pages\ListDataProtectionAssessments;
use JeffersonGoncalves\Filament\UsPrivacyAssessments\UsPrivacyAssessmentsPlugin;
use JeffersonGoncalves\UsPrivacyAssessments\Enums\AssessmentStatus;
use JeffersonGoncalves\UsPrivacyAssessments\Enums\RiskLevel;
use JeffersonGoncalves\UsPrivacyAssessments\Enums\Threat;
use JeffersonGoncalves\UsPrivacyAssessments\Models\DataProtectionAssessment;

class DataProtectionAssessmentResource extends Resource
{
    protected static ?string $model = DataProtectionAssessment::class;

    public static function form(Form $form): Form
    {
        $scale = [1 => static::label('scale.1'), 2 => static::label('scale.2'), 3 => static::label('scale.3')];

        return $form
            ->columns(2)
            ->schema([
                TextInput::make('title')
                    ->label(static::label('fields.title'))
                    ->required()
                    ->maxLength(255),
                Select::make('processing_activity_id')
                    ->label(static::label('fields.processing_activity'))
                    ->relationship('processingActivity', 'name')
                    ->searchable()
                    ->preload(),
                Textarea::make('description')
                    ->label(static::label('fields.description'))
                    ->helperText(static::label('help.description'))
                    ->columnSpanFull(),
                Textarea::make('benefits')
                    ->label(static::label('fields.benefits'))
                    ->helperText(static::label('help.benefits'))
                    ->columnSpanFull(),
                Textarea::make('necessity')
                    ->label(static::label('fields.necessity'))
                    ->helperText(static::label('help.necessity'))
                    ->columnSpanFull(),
                Repeater::make('risks')
                    ->label(static::label('fields.risks'))
                    ->helperText(static::label('help.risks'))
                    ->schema([
                        TextInput::make('title')
                            ->label(static::label('fields.risk_title'))
                            ->required()
                            ->columnSpan(2),
                        Select::make('threat')
                            ->label(static::label('fields.threat'))
                            ->options(static::enumOptions(Threat::cases(), 'threats')),
                        Select::make('likelihood')
                            ->label(static::label('fields.likelihood'))
                            ->options($scale)
                            ->required(),
                        Select::make('impact')
                            ->label(static::label('fields.impact'))
                            ->options($scale)
                            ->required(),
                        Textarea::make('measures')
                            ->label(static::label('fields.measures'))
                            ->columnSpanFull(),
                        Select::make('residual_likelihood')
                            ->label(static::label('fields.residual_likelihood'))
                            ->options($scale),
                        Select::make('residual_impact')
                            ->label(static::label('fields.residual_impact'))
                            ->options($scale),
                    ])
                    ->columns(3)
                    ->defaultItems(0)
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                    ->collapsible()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(static::label('fields.title'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('processingActivity.name')
                    ->label(static::label('fields.processing_activity'))
                    ->placeholder('-'),
                TextColumn::make('status')
                    ->label(static::label('fields.status'))
                    ->state(fn (DataProtectionAssessment $record): string => $record->isReviewDue() ? 'review_due' : $record->status->value)
                    ->formatStateUsing(fn (string $state): string => static::label("statuses.{$state}"))
                    ->color(fn (string $state): string => match ($state) {
                        'approved' => 'success',
                        'review_due' => 'danger',
                        default => 'gray',
                    })
                    ->badge(),
                TextColumn::make('inherent_risk')
                    ->label(static::label('fields.inherent_risk'))
                    ->state(fn (DataProtectionAssessment $record): ?string => $record->highestRisk(residual: false)?->value)
                    ->formatStateUsing(fn (string $state): string => static::label("levels.{$state}"))
                    ->color(fn (string $state): string => static::levelColor($state))
                    ->badge()
                    ->placeholder('-'),
                TextColumn::make('residual_risk')
                    ->label(static::label('fields.residual_risk'))
                    ->state(fn (DataProtectionAssessment $record): ?string => $record->highestRisk()?->value)
                    ->formatStateUsing(fn (string $state): string => static::label("levels.{$state}"))
                    ->color(fn (string $state): string => static::levelColor($state))
                    ->badge()
                    ->placeholder('-'),
                TextColumn::make('next_review_at')
                    ->label(static::label('fields.next_review_at'))
                    ->date()
                    ->sortable()
                    ->placeholder('-'),
            ])
            ->defaultSort('title')
            ->filters([
                SelectFilter::make('status')
                    ->label(static::label('fields.status'))
                    ->options(static::enumOptions(AssessmentStatus::cases(), 'statuses')),
                Filter::make('due_for_review')
                    ->label(static::label('statuses.review_due'))
                    ->query(fn (Builder $query): Builder => $query->scopes('dueForReview')),
            ])
            ->actions([
                EditAction::make(),
                DataProtectionAssessmentActions::approve(TableAction::class),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDataProtectionAssessments::route('/'),
            'create' => CreateDataProtectionAssessment::route('/create'),
            'edit' => EditDataProtectionAssessment::route('/{record}/edit'),
        ];
    }

    public static function levelColor(string $level): string
    {
        return match (RiskLevel::tryFrom($level)) {
            RiskLevel::High => 'danger',
            RiskLevel::Medium => 'warning',
            default => 'success',
        };
    }

    /**
     * @param  list<\UnitEnum&BackedEnum>  $cases
     * @return array<string, string>
     */
    public static function enumOptions(array $cases, string $group): array
    {
        return collect($cases)
            ->mapWithKeys(fn (BackedEnum $case): array => [(string) $case->value => static::label("{$group}.{$case->value}")])
            ->all();
    }

    public static function label(string $key): string
    {
        return __("filament-us-privacy-assessments::filament-us-privacy-assessments.{$key}");
    }

    public static function getModelLabel(): string
    {
        return static::label('resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return static::label('resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return UsPrivacyAssessmentsPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return UsPrivacyAssessmentsPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): ?string
    {
        return UsPrivacyAssessmentsPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(): string
    {
        return UsPrivacyAssessmentsPlugin::get()->getSlug();
    }
}
