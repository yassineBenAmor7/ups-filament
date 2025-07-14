<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Models\Document;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\{
    TextInput, Select, FileUpload, RichEditor, Grid
};
use Filament\Tables\Columns\{
    TextColumn
};

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Documents';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(2)->schema([
                Select::make('subject_document_id')->label('Sujet du document'),

                TextInput::make('designation_fr')->label('Désignation (FR)'),
                TextInput::make('designation_en')->label('Désignation (EN)'),
                TextInput::make('designation_ar')->label('Désignation (AR)'),

                FileUpload::make('files')->label('Fichier')->openable(),

                RichEditor::make('description_fr')->label('Description (FR)')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'bulletList', 'orderedList', 'link',
                        'undo', 'redo', 'removeFormat',
                    ]),
                RichEditor::make('description_en')->label('Description (EN)')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'bulletList', 'orderedList', 'link',
                        'undo', 'redo', 'removeFormat',
                    ]),
                RichEditor::make('description_ar')->label('Description (AR)')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'bulletList', 'orderedList', 'link',
                        'undo', 'redo', 'removeFormat',
                    ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('designation_fr')->label('Désignation (FR)'),
            TextColumn::make('subject_document_id')->label('Sujet'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
