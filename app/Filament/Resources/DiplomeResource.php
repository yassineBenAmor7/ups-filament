<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiplomeResource\Pages;
use App\Models\Diplome;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\{
    TextInput, Select, DatePicker, FileUpload, RichEditor, Grid
};
use Filament\Tables\Columns\{
    TextColumn
};

class DiplomeResource extends Resource
{
    protected static ?string $model = Diplome::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Diplômes';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(3)->schema([
                TextInput::make('name')->label('Nom'),
                TextInput::make('phone')->label('Téléphone'),
                TextInput::make('email')->label('Email'),
                TextInput::make('cin')->label('CIN'),
                FileUpload::make('avatar')->label('Photo'),
                TextInput::make('nationalite')->label('Nationalité'),
                Select::make('genre')->label('Genre')->options([
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ]),
                DatePicker::make('date_naissance')->label('Date de naissance'),
                TextInput::make('lieu_naissance')->label('Lieu de naissance'),
                TextInput::make('address')->label('Adresse'),
                TextInput::make('linkedin')->label('LinkedIn'),
                FileUpload::make('cv')->label('CV'),
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
            TextColumn::make('name')->label('Nom'),
            TextColumn::make('email')->label('Email'),
            TextColumn::make('cin')->label('CIN'),
            TextColumn::make('genre')->label('Genre'),
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
            'index' => Pages\ListDiplomes::route('/'),
            'create' => Pages\CreateDiplome::route('/create'),
            'edit' => Pages\EditDiplome::route('/{record}/edit'),
        ];
    }
}
