<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\MasterDiploma;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MasterDiplomaResource\Pages;
use App\Filament\Resources\MasterDiplomaResource\RelationManagers;

class MasterDiplomaResource extends BaseResource
{
    protected static ?string $model = MasterDiploma::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('capacite')->numeric()->label('Capacité'),
                Toggle::make('publier')->label('Publié'),
                TextInput::make('created_by')->label('Créé par'),
                TextInput::make('updated_by')->label('Mis à jour par'),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id')->label('ID'),
            static::CustomTextColumn('capacite')->label('Capacité'),
            ToggleColumn::make('publier')->label('Publié'),
            static::CustomTextColumn('created_by')->label('Créé par'),
            static::CustomTextColumn('updated_by')->label('Mis à jour par'),
        ];
    }


    public static function table(Table $table): Table
    {
        return parent::table($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMasterDiplomas::route('/'),
            'create' => Pages\CreateMasterDiploma::route('/create'),
            'edit' => Pages\EditMasterDiploma::route('/{record}/edit'),
        ];
    }
}
