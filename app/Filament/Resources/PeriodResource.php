<?php

namespace App\Filament\Resources;

use App\Models\Period;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Table;
use App\Filament\Resources\PeriodResource\Pages;

class PeriodResource extends BaseResource
{
    protected static ?string $model = Period::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->nullable(),
            TextInput::make('designation_en')->nullable(),
            TextInput::make('designation_ar')->nullable(),
            TimePicker::make('start_hour')->nullable(),
            TimePicker::make('end_hour')->nullable(),
            TextInput::make('created_by')->nullable(),
            TextInput::make('updated_by')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('start_hour'),
            static::CustomTextColumn('end_hour'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
        ];
    }

    public static function getExtraFilters(): array
    {
        return [];
    }

    public static function table(Table $table): Table
    {
        return parent::table($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPeriods::route('/'),
            'create' => Pages\CreatePeriod::route('/create'),
            'edit' => Pages\EditPeriod::route('/{record}/edit'),
        ];
    }
}
