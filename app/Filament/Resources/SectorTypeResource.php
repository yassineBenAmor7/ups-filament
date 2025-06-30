<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectorTypeResource\Pages;
use App\Filament\Resources\SectorTypeResource\RelationManagers;
use App\Models\SectorType;
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
use Filament\Tables\Actions\BulkActionGroup;use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectorTypeResource extends BaseResource
{
    protected static ?string $model = SectorType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('designation_fr')->required(),
        TextInput::make('designation_en'),
        TextInput::make('designation_ar'),
    ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('designation_fr')->searchable(),
            TextColumn::make('designation_en'),
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
            'index' => Pages\ListSectorTypes::route('/'),
            'create' => Pages\CreateSectorType::route('/create'),
            'edit' => Pages\EditSectorType::route('/{record}/edit'),
        ];
    }
}
