<?php

namespace App\Filament\Resources;

use App\Models\NachdEtapedecisionFormulaire;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdEtapedecisionFormulaireResource\Pages;
use Filament\Tables\Table;

class NachdEtapedecisionFormulaireResource extends BaseResource
{
    protected static ?string $model = NachdEtapedecisionFormulaire::class;
    protected static ?string $navigationIcon = 'heroicon-o-link';
    protected static ?string $navigationLabel = 'Étapes/Formulaires';
    protected static ?string $pluralModelLabel = 'Étapes/Formulaires';
    protected static ?string $modelLabel = 'Étape/Formulaire';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('nachd_formulaire_id')->relationship('nachdFormulaire', 'id')->nullable(),
                Select::make('nachd_etapedecision_id')->relationship('nachdEtapedecision', 'id')->nullable(),
                TextInput::make('ordre')->nullable(),
                // TextInput::make('created_by')->nullable(),
                // TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('nachd_formulaire_id'),
            static::CustomTextColumn('nachd_etapedecision_id'),
            static::CustomTextColumn('ordre'),
            // static::CustomTextColumn('created_by'),
            // static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListNachdEtapedecisionFormulaires::route('/'),
            'create' => Pages\CreateNachdEtapedecisionFormulaire::route('/create'),
            'edit' => Pages\EditNachdEtapedecisionFormulaire::route('/{record}/edit'),
        ];
    }
}
