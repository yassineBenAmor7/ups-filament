<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlbumResource\Pages;
use App\Models\Album;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\{TextInput, Toggle, FileUpload, DatePicker, RichEditor, Grid};
use Filament\Tables\Columns\{TextColumn,};

class AlbumResource extends BaseResource
{
    protected static ?string $model = Album::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    protected static ?string $navigationLabel = 'Albums';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(3)->schema([
                TextInput::make('designation_fr')->label('Désignation (FR)')->maxLength(255),
                TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(255),
                TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(255),

                TextInput::make('type')->label('Type')->maxLength(255),
                FileUpload::make('cover')->label('Image de couverture'),
                TextInput::make('folder')->label('Dossier')->maxLength(255),
                TextInput::make('lieu')->label('Lieu')->maxLength(255),
                DatePicker::make('date')->label('Date'),

                TextInput::make('short_description_fr')->label('Résumé (FR)')->maxLength(255),
                TextInput::make('short_description_en')->label('Résumé (EN)')->maxLength(255),
                TextInput::make('short_description_ar')->label('Résumé (AR)')->maxLength(255),
            ]),

            Grid::make(1)->schema([
                RichEditor::make('description_fr')->label('Description (FR)')
                    ->toolbarButtons(['bold','italic','underline','strike','bulletList','orderedList','link','undo','redo','removeFormat']),
                RichEditor::make('description_en')->label('Description (EN)')
                    ->toolbarButtons(['bold','italic','underline','strike','bulletList','orderedList','link','undo','redo','removeFormat']),
                RichEditor::make('description_ar')->label('Description (AR)')
                    ->toolbarButtons(['bold','italic','underline','strike','bulletList','orderedList','link','undo','redo','removeFormat']),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('designation_fr')->label('Titre (FR)'),
            TextColumn::make('type')->label('Type'),
            TextColumn::make('lieu')->label('Lieu'),
            TextColumn::make('date')->label('Date'),
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
            'index' => Pages\ListAlbums::route('/'),
            'create' => Pages\CreateAlbum::route('/create'),
            'edit' => Pages\EditAlbum::route('/{record}/edit'),
        ];
    }
}

