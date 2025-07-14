<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InaiResource\Pages;
use App\Models\Inai;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class InaiResource extends BaseResource
{
    protected static ?string $model = Inai::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            RichEditor::make('content_fr')->label('Contenu (FR)'),
            RichEditor::make('content_en')->label('Contenu (EN)'),
            RichEditor::make('content_ar')->label('Contenu (AR)'),
            TextInput::make('logo')->label('Logo'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('content_fr')->label('Contenu FR')->limit(50),
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
            'index' => Pages\ListInais::route('/'),
            'create' => Pages\CreateInai::route('/create'),
            'edit' => Pages\EditInai::route('/{record}/edit'),
        ];
    }
}
