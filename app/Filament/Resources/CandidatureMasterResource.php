<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidatureMasterResource\Pages;
use App\Models\CandidatureMaster;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\{
    TextInput, DatePicker, Toggle, Textarea, Select, Grid
};
use Filament\Tables\Columns\{
    TextColumn, IconColumn
};

class CandidatureMasterResource extends BaseResource
{
    protected static ?string $model = CandidatureMaster::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    protected static ?string $navigationLabel = 'Candidatures Master';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Grid::make(3)->schema([
                TextInput::make('choix1')->label('Choix 1')->maxLength(255),
                TextInput::make('choix2')->label('Choix 2')->maxLength(255),
                TextInput::make('cin_passport')->label('CIN / Passeport')->maxLength(255),
                TextInput::make('nom')->label('Nom')->maxLength(255),
                TextInput::make('prenom')->label('Prénom')->maxLength(255),
                TextInput::make('nom_jeune_fille')->label('Nom de jeune fille')->maxLength(255),

                Select::make('sexe')->label('Sexe')->options([
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ]),

                DatePicker::make('date_naissance')->label('Date de naissance'),
                TextInput::make('nationalite')->label('Nationalité')->maxLength(255),

                TextInput::make('adresse')->label('Adresse')->maxLength(255),
                TextInput::make('pays')->label('Pays')->maxLength(255),
                TextInput::make('gouvernorat')->label('Gouvernorat')->maxLength(255),
                TextInput::make('ville')->label('Ville')->maxLength(255),
                TextInput::make('code_postal')->label('Code postal')->maxLength(255),
                TextInput::make('telephone')->label('Téléphone')->maxLength(255),
                TextInput::make('email')->label('Email')->maxLength(255),

                TextInput::make('annee_bac')->label('Année bac')->maxLength(255),
                TextInput::make('moyenne_bac')->label('Moyenne bac')->maxLength(255),
                TextInput::make('nb_redoublement')->label('Nombre de redoublements')->maxLength(255),

                Toggle::make('reussite_3ans')->label('Réussite en 3 ans'),
                Toggle::make('retrait_inscription')->label('Retrait d\'inscription'),

                TextInput::make('moyenne_diplome')->label('Moyenne diplôme')->maxLength(255),
                TextInput::make('type_etablissement')->label('Type établissement')->maxLength(255),
                TextInput::make('nature_diplome')->label('Nature diplôme')->maxLength(255),
                TextInput::make('specialite')->label('Spécialité')->maxLength(255),
                TextInput::make('annee_diplome')->label('Année du diplôme')->maxLength(255),
                TextInput::make('situation_pro')->label('Situation professionnelle')->maxLength(255),
                TextInput::make('nb_stages')->label('Nombre de stages')->maxLength(255),
            ]),

            Grid::make(1)->schema([
                Textarea::make('etudes_superieures')->label('Études supérieures'),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('nom')->label('Nom'),
            TextColumn::make('prenom')->label('Prénom'),
            TextColumn::make('cin_passport')->label('CIN / Passeport'),
            TextColumn::make('choix1')->label('Choix 1'),
            TextColumn::make('choix2')->label('Choix 2'),
            IconColumn::make('reussite_3ans')->label('Réussite en 3 ans')->boolean(),
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
            'index' => Pages\ListCandidatureMasters::route('/'),
            'create' => Pages\CreateCandidatureMaster::route('/create'),
            'edit' => Pages\EditCandidatureMaster::route('/{record}/edit'),
        ];
    }
}
