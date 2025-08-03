<?php

namespace App\Filament\Resources;

use App\Models\PasswordReset;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use App\Filament\Resources\PasswordResetResource\Pages;

class PasswordResetResource extends BaseResource
{
    protected static ?string $model = PasswordReset::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('email')->email()->required(),
            TextInput::make('token')->required(),
            // TextInput::make('created_at')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('email'),
            static::CustomTextColumn('token'),
            // static::CustomTextColumn('created_at'),
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
            'index' => Pages\ListPasswordResets::route('/'),
            'create' => Pages\CreatePasswordReset::route('/create'),
            'edit' => Pages\EditPasswordReset::route('/{record}/edit'),
        ];
    }
}
