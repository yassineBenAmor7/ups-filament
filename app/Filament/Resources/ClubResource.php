<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClubResource\Pages;
use App\Models\Club;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class ClubResource extends BaseResource
{
    protected static ?string $model = Club::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->label('Désignation (FR)')->maxLength(255),
            TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(255),
            TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(255),

            FileUpload::make('cover')->label('Image de couverture'),
            FileUpload::make('logo')->label('Logo'),
            TextInput::make('domaine')->label('Domaine'),
            TextInput::make('facebook')->label('Page Facebook'),

            RichEditor::make('description_fr')->label('Description (FR)')->maxlength(255),
            RichEditor::make('description_en')->label('Description (EN)')->maxlength(255),
            RichEditor::make('description_ar')->label('Description (AR)')->maxlength(255),

            TextInput::make('meta_description_fr')->label('Meta description (FR)')->maxlength(255),
            TextInput::make('meta_description_en')->label('Meta description (EN)')->maxlength(255),
            TextInput::make('meta_description_ar')->label('Meta description (AR)')->maxlength(255),

            TextInput::make('n_membres')->label('Nombre de membres')->numeric(),
            TextInput::make('encadrent')->label('Encadrant'),
            TextInput::make('date_creation')->label('Date de création'),

            Toggle::make('publier')->label('Publié')->default(false),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->label('Nom'),
                TextColumn::make('domaine')->label('Domaine'),
                IconColumn::make('publier')->boolean()->label('Publié'),
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
            'index' => Pages\ListClubs::route('/'),
            'create' => Pages\CreateClub::route('/create'),
            'edit' => Pages\EditClub::route('/{record}/edit'),
        ];
    }
}
