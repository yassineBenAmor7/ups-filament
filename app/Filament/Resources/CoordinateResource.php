<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoordinateResource\Pages;
use App\Models\Coordinate;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class CoordinateResource extends BaseResource
{
    protected static ?string $model = Coordinate::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->label('Désignation (FR)')->maxlength(255),
            TextInput::make('designation_en')->label('Désignation (EN)')->maxlength(255),
            TextInput::make('designation_ar')->label('Désignation (AR)')->maxlength(255),

            TextInput::make('abbreviation')->label('Abréviation')->maxlength(255),

            Textarea::make('adresse_fr')->label('Adresse (FR)'),
            Textarea::make('adresse_en')->label('Adresse (EN)'),
            Textarea::make('adresse_ar')->label('Adresse (AR)'),

            TextInput::make('phone')->label('Téléphone 1')->maxlength(255),
            TextInput::make('phone_2')->label('Téléphone 2')->maxlength(255),
            TextInput::make('fax')->label('Fax')->maxlength(255),
            TextInput::make('email')->label('Email')->maxlength(255),

            TextInput::make('university')->label('Université')->maxlength(255),
            TextInput::make('ministere')->label('Ministère')->maxlength(255),

            TextInput::make('facebook_link')->label('Lien Facebook')->maxlength(255),
            TextInput::make('twitter_link')->label('Lien Twitter')->maxlength(255),
            TextInput::make('youtube_link')->label('Lien YouTube')->maxlength(255),
            TextInput::make('google_link')->label('Lien Google')->maxlength(255),
            TextInput::make('name_page_facebook')->label('Nom page Facebook')->maxlength(255),

            TextInput::make('location')->label('Localisation')->maxlength(255),
            TextInput::make('video')->label('Vidéo'),

            TextInput::make('cover')->label('Image de couverture'),
            TextInput::make('cover_mot_du_directeur')->label('Image du mot du directeur'),
            TextInput::make('logo')->label('Logo'),
            TextInput::make('logo_footer')->label('Logo pied de page'),
            TextInput::make('favicon')->label('Favicon'),

            TextInput::make('title_mot_du_directeur')->label('Titre du mot du directeur'),
            Textarea::make('description_mot_directeur')->label('Mot du directeur'),

            Textarea::make('short_description_fr')->label('Courte description (FR)'),
            Textarea::make('short_description_en')->label('Courte description (EN)'),
            Textarea::make('short_description_ar')->label('Courte description (AR)'),

            RichEditor::make('description_fr')->label('Description (FR)'),
            RichEditor::make('description_en')->label('Description (EN)'),
            RichEditor::make('description_ar')->label('Description (AR)'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->label('Désignation'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('phone')->label('Téléphone'),
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
            'index' => Pages\ListCoordinates::route('/'),
            'create' => Pages\CreateCoordinate::route('/create'),
            'edit' => Pages\EditCoordinate::route('/{record}/edit'),
        ];
    }
}
