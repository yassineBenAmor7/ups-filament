<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('name')->required(),
            TextInput::make('name_ar'),
            TextInput::make('email')->email(),
            TextInput::make('phone'),
            TextInput::make('password')->password(),
            TextInput::make('cin'),
            TextInput::make('avatar'),
            TextInput::make('nationalite'),
            TextInput::make('genre'),
            TextInput::make('address'),
            TextInput::make('cnss'),
            DatePicker::make('date_naissance'),
            TextInput::make('lieu_naissance'),
            Textarea::make('cv'),
            TextInput::make('description_ar'),
            TextInput::make('description_en'),
            TextInput::make('description_fr'),
            TextInput::make('created_by'),
            TextInput::make('updated_by'),
            TextInput::make('publier'),
            TextInput::make('folder_name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone'),
                TextColumn::make('cin'),
                TextColumn::make('nationalite'),
                TextColumn::make('genre'),
                TextColumn::make('publier'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
