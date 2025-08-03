<?php

namespace App\Filament\Resources;

use App\Models\NachdFormulaireRole;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdFormulaireRoleResource\Pages;
use Filament\Tables\Table;

class NachdFormulaireRoleResource extends BaseResource
{
    protected static ?string $model = NachdFormulaireRole::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Formulaire Roles';
    protected static ?string $pluralModelLabel = 'Formulaire Roles';
    protected static ?string $modelLabel = 'Formulaire Role';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('nachd_formulaire_id')->relationship('nachdFormulaire', 'id')->nullable(),
                Select::make('role_id')->relationship('role', 'id')->nullable(),
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
            static::CustomTextColumn('role_id'),
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
            'index' => Pages\ListNachdFormulaireRoles::route('/'),
            'create' => Pages\CreateNachdFormulaireRole::route('/create'),
            'edit' => Pages\EditNachdFormulaireRole::route('/{record}/edit'),
        ];
    }
}
