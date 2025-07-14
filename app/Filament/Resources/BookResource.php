<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\{Select,TextInput,FileUpload, RichEditor, Toggle, Grid,DatePicker};
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\{
    TextColumn,
    IconColumn
};
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class BookResource extends BaseResource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
          return $form->schema([
            Grid::make(3)->schema([
                Select::make('theme_id')->label('Thème'),

                TextInput::make('designation_fr')->label('Désignation (FR)')->maxLength(255),
                TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(255),
                TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(255),

                TextInput::make('isbn')->label('ISBN')->maxLength(255),
                TextInput::make('author')->label('Auteur')->maxLength(255),

                FileUpload::make('cover')->label('Image de couverture'),

                Toggle::make('publier')->label('Publié'),
            ]),

            Grid::make(1)->schema([
                RichEditor::make('description_fr')
                    ->label('Description (FR)')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'h1', 'h2', 'h3',
                        'bulletList', 'orderedList',
                        'blockquote', 'link',
                        'undo', 'redo',
                        'removeFormat',
                    ]),
                RichEditor::make('description_en')
                    ->label('Description (EN)')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'h1', 'h2', 'h3',
                        'bulletList', 'orderedList',
                        'blockquote', 'link',
                        'undo', 'redo',
                        'removeFormat',
                    ]),
                RichEditor::make('description_ar')
                    ->label('Description (AR)')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'h1', 'h2', 'h3',
                        'bulletList', 'orderedList',
                        'blockquote', 'link',
                        'undo', 'redo',
                        'removeFormat',
                    ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('designation_fr')->label('Titre (FR)'),
            TextColumn::make('author')->label('Auteur'),
            TextColumn::make('isbn')->label('ISBN'),
            TextColumn::make('theme.designation_fr')->label('Thème'),
            IconColumn::make('publier')->label('Publié')->boolean(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
