<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectorResource\Pages;
use App\Models\Sector;
use Filament\Forms\Components\{TextInput, RichEditor, Toggle, Grid, Select};
use Filament\Resources\Resource;
use Filament\Tables\Columns\{TextColumn, IconColumn};
use Filament\Tables\Actions\{EditAction, DeleteBulkAction, BulkActionGroup};
use Filament\Tables\Table;

class SectorResource extends Resource
{
    protected static ?string $model = Sector::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form->schema([
            Grid::make(2)->schema([
                Select::make('department_id')
                    ->relationship('department', 'designation_fr')
                    ->required(),
                Select::make('sector_type_id')
                    ->relationship('sectorType', 'designation_fr')
                    ->required(),
                TextInput::make('designation_fr')->required()->maxLength(100),
                TextInput::make('designation_en')->maxLength(100),
                TextInput::make('designation_ar')->maxLength(100),
                Toggle::make('publier')->label('Publié')->default(true),
            ]),
            Grid::make()->schema([
                RichEditor::make('description_fr')->label('Description (FR)'),
                RichEditor::make('description_en')->label('Description (EN)'),
                RichEditor::make('description_ar')->label('Description (AR)'),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->searchable(),
                TextColumn::make('designation_en'),
                TextColumn::make('department.designation_fr')->label('Département'),
                TextColumn::make('sectorType.designation_fr')->label('Type de secteur'),
                IconColumn::make('publier')->boolean()->label('Publié'),
            ])
            ->actions([EditAction::make()])
            ->bulkActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }

    public static function getRelations(): array
    {
        return [];
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