<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserRolesResource\Pages;
use App\Models\UserRoles;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class UserRolesResource extends BaseResource
{
    protected static ?string $model = UserRoles::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_id')->numeric()->required(),
                TextInput::make('role_id')->numeric()->required(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('role_id'),
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
            'index' => Pages\ListUserRoles::route('/'),
            'create' => Pages\CreateUserRoles::route('/create'),
            'edit' => Pages\EditUserRoles::route('/{record}/edit'),
        ];
    }
}
