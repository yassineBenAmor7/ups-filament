<?php
namespace App\Filament\Resources;

use App\Filament\Resources\SectorTypeResource\Pages;
use App\Models\SectorType;
use Filament\Forms\Components\{TextInput, RichEditor, Toggle, Grid};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\{TextColumn, IconColumn};
use Filament\Tables\Actions\{EditAction, DeleteBulkAction, BulkActionGroup};
use Filament\Tables\Table;

class SectorTypeResource extends Resource
{
    protected static ?string $model = SectorType::class;
    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(2)->schema([
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
            'index' => Pages\ListSectorTypes::route('/'),
            'create' => Pages\CreateSectorType::route('/create'),
            'edit' => Pages\EditSectorType::route('/{record}/edit'),
        ];
    }
}