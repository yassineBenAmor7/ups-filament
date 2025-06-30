<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoordinationSectorResource\Pages;
use App\Filament\Resources\CoordinationSectorResource\RelationManagers;
use App\Models\CoordinationSector;
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

class CoordinationSectorResource extends BaseResource
{
    protected static ?string $model = CoordinationSector::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        Select::make('sector_id')
            ->relationship('Sector', 'designation_fr')
            ->required(),
        Select::make('user_id')
            ->relationship('user', 'name')
            ->required(),
        TextInput::make('role')->required(),
    ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('Sector.designation_fr'),
            TextColumn::make('user.name'),
            TextColumn::make('role'),
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
            'index' => Pages\ListCoordinationSectors::route('/'),
            'create' => Pages\CreateCoordinationSector::route('/create'),
            'edit' => Pages\EditCoordinationSector::route('/{record}/edit'),
        ];
    }
}
