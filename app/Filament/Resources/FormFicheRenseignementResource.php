<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormFicheRenseignementResource\Pages;
use App\Models\FormFicheRenseignement;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class FormFicheRenseignementResource extends BaseResource
{
    protected static ?string $model = FormFicheRenseignement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(2)->schema([
                TextInput::make('numero_inscription')->label('Numéro d\'inscription'),
                TextInput::make('student_name')->label('Nom de l\'étudiant'),
                TextInput::make('student_id')->label('ID étudiant'),
                TextInput::make('group_id')->label('ID Groupe'),
                TextInput::make('group_designation')->label('Groupe'),
                TextInput::make('group_td_designation')->label('TD'),
                TextInput::make('group_tp_designation')->label('TP'),
                TextInput::make('group_td_id')->label('ID TD'),
                TextInput::make('group_tp_id')->label('ID TP'),
                TextInput::make('diplome_prepare')->label('Diplôme préparé'),
                TextInput::make('specialite')->label('Spécialité'),
                TextInput::make('etat')->label('État'),
                TextInput::make('niveau_etude')->label('Niveau d\'étude'),
                TextInput::make('year_id')->label('Année'),
                TextInput::make('specialite_educatif_precedent')->label('Spécialité précédente'),
                TextInput::make('etablissement_educatif_precedente')->label('Établissement éducatif précédent'),
                TextInput::make('niveau_etab_educatif_precedent')->label('Niveau établissement éducatif précédent'),
                TextInput::make('adresse')->label('Adresse'),
                TextInput::make('code_postale')->label('Code postal'),
                TextInput::make('phone')->label('Téléphone'),
                TextInput::make('profession')->label('Profession'),
                TextInput::make('employeur')->label('Employeur'),
                TextInput::make('etat_civil')->label('État civil'),
                TextInput::make('etat_militaire')->label('État militaire'),
                TextInput::make('besoin_specifique')->label('Besoin spécifique'),
                RichEditor::make('description_besoin_specifique')->label('Description besoin spécifique'),
                TextInput::make('adresse_parents')->label('Adresse des parents'),
                TextInput::make('code_postale_parents')->label('Code postal des parents'),
                TextInput::make('tel_parents')->label('Téléphone des parents'),
                TextInput::make('conjoint')->label('Conjoint'),
                TextInput::make('profession_conjoint')->label('Profession du conjoint'),
                TextInput::make('etablissement_profession_conjoint')->label('Établissement du conjoint'),
                TextInput::make('nombre_enfants')->label('Nombre d\'enfants'),
                TextInput::make('avatar')->label('Avatar'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student_name')->label('Étudiant'),
                TextColumn::make('numero_inscription')->label('N° inscription'),
                TextColumn::make('diplome_prepare')->label('Diplôme'),
                TextColumn::make('specialite')->label('Spécialité'),
                TextColumn::make('niveau_etude')->label('Niveau'),
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormFicheRenseignements::route('/'),
            'create' => Pages\CreateFormFicheRenseignement::route('/create'),
            'edit' => Pages\EditFormFicheRenseignement::route('/{record}/edit'),
        ];
    }
}
