<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaureateResource\Pages;
use App\Models\Laureate;
use App\Models\Year;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class LaureateResource extends BaseResource
{
    protected static ?string $model = Laureate::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('year_id')
                ->label('Année')
                ->relationship('year', 'designation_fr'),

            TextInput::make('name')->label('Nom'),
            TextInput::make('email')->label('Email'),
            TextInput::make('avatar')->label('Avatar'),
            TextInput::make('sector')->label('Secteur'),
            TextInput::make('score')->label('Score'),

            Toggle::make('publier')->label('Publié'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nom'),
                TextColumn::make('year.designation_fr')->label('Année'),
                IconColumn::make('publier')->boolean()->label('Publié'),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaureates::route('/'),
            'create' => Pages\CreateLaureate::route('/create'),
            'edit' => Pages\EditLaureate::route('/{record}/edit'),
        ];
    }
}
