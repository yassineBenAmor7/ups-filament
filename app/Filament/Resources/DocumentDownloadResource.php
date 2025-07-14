<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentDownloadResource\Pages;
use App\Models\DocumentDownload;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\{
    Select, Grid
};
use Filament\Tables\Columns\{
    TextColumn
};

class DocumentDownloadResource extends Resource
{
    protected static ?string $model = DocumentDownload::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Téléchargements de documents';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(1)->schema([
                Select::make('user_id')->label('Utilisateur'),
                Select::make('document_id')->label('Document'),
                Select::make('subject_id')->label('Sujet'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('user_id')->label('Utilisateur'),
            TextColumn::make('document_id')->label('Document'),
            TextColumn::make('subject_id')->label('Sujet'),
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
            'index' => Pages\ListDocumentDownloads::route('/'),
            'create' => Pages\CreateDocumentDownload::route('/create'),
            'edit' => Pages\EditDocumentDownload::route('/{record}/edit'),
        ];
    }
}
