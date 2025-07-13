<?php

namespace App\Filament\Resources;

use App\Models\NachdFormulaireInput;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdFormulaireInputResource\Pages;
use Filament\Tables\Table;

class NachdFormulaireInputResource extends BaseResource
{
    protected static ?string $model = NachdFormulaireInput::class;
    protected static ?string $navigationIcon = 'heroicon-o-table-cells';
    protected static ?string $navigationLabel = 'Formulaire Inputs';
    protected static ?string $pluralModelLabel = 'Formulaire Inputs';
    protected static ?string $modelLabel = 'Formulaire Input';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('nachd_formulaire_id')->relationship('nachdFormulaire', 'id')->nullable(),
                Select::make('nachd_input_id')->relationship('nachdInput', 'id')->nullable(),
                TextInput::make('etat_required')->nullable(),
                TextInput::make('etat_disabled')->nullable(),
                TextInput::make('etat_public')->nullable(),
                TextInput::make('ordre')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('nachd_formulaire_id'),
            static::CustomTextColumn('nachd_input_id'),
            static::CustomTextColumn('etat_required'),
            static::CustomTextColumn('etat_disabled'),
            static::CustomTextColumn('etat_public'),
            static::CustomTextColumn('ordre'),
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
            'index' => Pages\ListNachdFormulaireInputs::route('/'),
            'create' => Pages\CreateNachdFormulaireInput::route('/create'),
            'edit' => Pages\EditNachdFormulaireInput::route('/{record}/edit'),
        ];
    }
}
