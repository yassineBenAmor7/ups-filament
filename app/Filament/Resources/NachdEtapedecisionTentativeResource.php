<?php

namespace App\Filament\Resources;

use App\Models\NachdEtapedecisionTentative;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdEtapedecisionTentativeResource\Pages;
use Filament\Tables\Table;

class NachdEtapedecisionTentativeResource extends BaseResource
{
    protected static ?string $model = NachdEtapedecisionTentative::class;
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';
    protected static ?string $navigationLabel = 'Étapes/Tentatives';
    protected static ?string $pluralModelLabel = 'Étapes/Tentatives';
    protected static ?string $modelLabel = 'Étape/Tentative';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('nachd_tentative_id')->relationship('nachdTentative', 'id')->nullable(),
                Select::make('nachd_etapedecision_id')->relationship('nachdEtapedecision', 'id')->nullable(),
                TextInput::make('etat')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('nachd_tentative_id'),
            static::CustomTextColumn('nachd_etapedecision_id'),
            static::CustomTextColumn('etat'),
            static::CustomTextColumn('created_by'),
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
            'index' => Pages\ListNachdEtapedecisionTentatives::route('/'),
            'create' => Pages\CreateNachdEtapedecisionTentative::route('/create'),
            'edit' => Pages\EditNachdEtapedecisionTentative::route('/{record}/edit'),
        ];
    }
}
