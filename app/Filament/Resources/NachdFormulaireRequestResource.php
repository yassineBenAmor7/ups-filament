<?php

namespace App\Filament\Resources;

use App\Models\NachdFormulaireRequest;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdFormulaireRequestResource\Pages;
use Filament\Tables\Table;

class NachdFormulaireRequestResource extends BaseResource
{
    protected static ?string $model = NachdFormulaireRequest::class;
    protected static ?string $navigationIcon = 'heroicon-o-inbox';
    protected static ?string $navigationLabel = 'Formulaire Requests';
    protected static ?string $pluralModelLabel = 'Formulaire Requests';
    protected static ?string $modelLabel = 'Formulaire Request';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('nachd_formulaire_input_id')->relationship('nachdFormulaireInput', 'id')->nullable(),
                Select::make('nachd_formulaire_id')->relationship('nachdFormulaire', 'id')->nullable(),
                Select::make('nachd_input_id')->relationship('nachdInput', 'id')->nullable(),
                Select::make('nachd_tentative_id')->relationship('nachdTentative', 'id')->nullable(),
                Textarea::make('value')->nullable(),
                TextInput::make('author_id')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('nachd_formulaire_input_id'),
            static::CustomTextColumn('nachd_formulaire_id'),
            static::CustomTextColumn('nachd_input_id'),
            static::CustomTextColumn('nachd_tentative_id'),
            static::CustomTextColumn('value'),
            static::CustomTextColumn('author_id'),
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
            'index' => Pages\ListNachdFormulaireRequests::route('/'),
            'create' => Pages\CreateNachdFormulaireRequest::route('/create'),
            'edit' => Pages\EditNachdFormulaireRequest::route('/{record}/edit'),
        ];
    }
}
