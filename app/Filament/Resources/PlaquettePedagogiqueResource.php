<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlaquettePedagogiqueResource\Pages;
use App\Filament\Resources\PlaquettePedagogiqueResource\RelationManagers;
use App\Models\PlaquettePedagogique;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlaquettePedagogiqueResource extends BaseResource
{
    protected static ?string $model = PlaquettePedagogique::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('description_fr'),
        TextInput::make('description_en'),
        TextInput::make('description_ar'),

        Select::make('sector_id')
            ->relationship('Sector', 'designation_fr')
            ->required(),
        Select::make('year_id')
            ->relationship('year', 'designation')
            ->required(),
    ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('description_fr'),
            TextColumn::make('description_en'),
            TextColumn::make('description_ar'),
            TextColumn::make('Sector.designation_fr'),
            TextColumn::make('year.designation'),
        ])
        ->filters([])
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlaquettePedagogiques::route('/'),
            'create' => Pages\CreatePlaquettePedagogique::route('/create'),
            'edit' => Pages\EditPlaquettePedagogique::route('/{record}/edit'),
        ];
    }
}
