<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CorrespondenceResource\Pages;
use App\Models\Correspondence;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class CorrespondenceResource extends BaseResource
{
    protected static ?string $model = Correspondence::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('source')->label('Source')->maxlength(255),
            DatePicker::make('arrival_date')->label('Date d\'arrivée'),
            DatePicker::make('correspondence_date')->label('Date de la correspondance'),
            TextInput::make('correspondence_number')->label('Numéro')->maxlength(255),
            TextInput::make('subject')->label('Sujet')->maxlength(255),

            FileUpload::make('files')->label('Fichiers')->multiple(),

            TextInput::make('type')->label('Type')->maxlength(255),
            TextInput::make('consignee')->label('Destinataire')->maxlength(255),
            DatePicker::make('delivery_date')->label('Date de remise'),
            TextInput::make('sender')->label('Expéditeur')->maxlength(255),
            TextInput::make('slug')->label('Slug')->maxlength(255),

            Toggle::make('publier')->label('Publié'),

            RichEditor::make('notes')->label('Notes'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('correspondence_number')->label('Numéro'),
                TextColumn::make('subject')->label('Sujet')->limit(30),
                IconColumn::make('publier')->boolean()->label('Publié'),
                TextColumn::make('arrival_date')->label('Arrivée'),
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
            'index' => Pages\ListCorrespondences::route('/'),
            'create' => Pages\CreateCorrespondence::route('/create'),
            'edit' => Pages\EditCorrespondence::route('/{record}/edit'),
        ];
    }
}
