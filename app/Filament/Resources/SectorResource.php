<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectorResource\Pages;
use App\Filament\Resources\SectorResource\RelationManagers;
use App\Models\Sector;
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

class SectorResource extends BaseResource
{
    protected static ?string $model = Sector::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

   public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('designation_fr')->required(),
        TextInput::make('designation_en'),
        TextInput::make('designation_ar'),
        TextInput::make('description_fr'),
        TextInput::make('description_en'),
        TextInput::make('description_ar'),
        TextInput::make('plan_etude'),
        TextInput::make('slug'),

        Select::make('department_id')
            ->relationship('department', 'designation_fr')
            ->required(),
        Select::make('sector_type_id')
            ->relationship('sectorType', 'designation_fr')
            ->required(),
    ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('designation_fr')->searchable(),
            TextColumn::make('department.designation_fr')->label('Département'),
            TextColumn::make('sectorType.designation_fr')->label('Type'),
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
            'index' => Pages\ListSectors::route('/'),
            'create' => Pages\CreateSector::route('/create'),
            'edit' => Pages\EditSector::route('/{record}/edit'),
        ];
    }
}
