<?php

namespace App\Filament\Resources;

use App\Models\Rapport;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Table;
use App\Filament\Resources\RapportResource\Pages;

class RapportResource extends BaseResource
{
    protected static ?string $model = Rapport::class;

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('stage_id')->relationship('stage', 'id')->nullable(),
            Textarea::make('rapport')->nullable(),
            Textarea::make('remarque')->nullable(),
            TextInput::make('etat')->nullable(),
            TextInput::make('created_by')->nullable(),
            DateTimePicker::make('created_at')->nullable(),
            DateTimePicker::make('updated_at')->nullable(),
            Textarea::make('avis_encadrant')->nullable(),
            Textarea::make('rapport_encadrant')->nullable(),
            DateTimePicker::make('rapport_encadrant_created_at')->nullable(),
            TextInput::make('stage_rapport_type_id')->nullable(),
            Textarea::make('plagiat_rapport')->nullable(),
            Textarea::make('plagiat_note')->nullable(),
            TextInput::make('updated_by')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('stage_id'),
            static::CustomTextColumn('rapport'),
            static::CustomTextColumn('remarque'),
            static::CustomTextColumn('etat'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('avis_encadrant'),
            static::CustomTextColumn('rapport_encadrant'),
            static::CustomTextColumn('rapport_encadrant_created_at'),
            static::CustomTextColumn('stage_rapport_type_id'),
            static::CustomTextColumn('plagiat_rapport'),
            static::CustomTextColumn('plagiat_note'),
            static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListRapports::route('/'),
            'create' => Pages\CreateRapport::route('/create'),
            'edit' => Pages\EditRapport::route('/{record}/edit'),
        ];
    }
}
