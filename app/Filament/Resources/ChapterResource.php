<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChapterResource\Pages;
use App\Models\Chapter;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\{
    TextInput, Select, Toggle, FileUpload, RichEditor, Grid
};
use Filament\Tables\Columns\{
    TextColumn, IconColumn
};

class ChapterResource extends BaseResource
{
    protected static ?string $model = Chapter::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    protected static ?string $navigationLabel = 'Chapitres';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(3)->schema([
                Select::make('course_id')->label('Cours'),

                TextInput::make('type')->label('Type'),

                TextInput::make('designation_fr')->label('Désignation (FR)')->maxLength(255),
                TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(255),
                TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(255),

                FileUpload::make('files')->label('Fichiers')->multiple(),

                Toggle::make('publier')->label('Publié'),
            ]),

            Grid::make(1)->schema([
                RichEditor::make('description_fr')->label('Description (FR)')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'bulletList', 'orderedList', 'link',
                        'undo', 'redo', 'removeFormat'
                    ]),
                RichEditor::make('description_en')->label('Description (EN)')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'bulletList', 'orderedList', 'link',
                        'undo', 'redo', 'removeFormat'
                    ]),
                RichEditor::make('description_ar')->label('Description (AR)')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'bulletList', 'orderedList', 'link',
                        'undo', 'redo', 'removeFormat'
                    ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('designation_fr')->label('Titre (FR)'),
            TextColumn::make('type')->label('Type'),
            IconColumn::make('publier')->label('Publié')->boolean(),
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
            'index' => Pages\ListChapters::route('/'),
            'create' => Pages\CreateChapter::route('/create'),
            'edit' => Pages\EditChapter::route('/{record}/edit'),
        ];
    }
}
