<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntrepriseResource\Pages;
use App\Models\Entreprise;
use App\Models\Domaine;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class EntrepriseResource extends BaseResource
{
    protected static ?string $model = Entreprise::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation')->label('Nom'),
            TextInput::make('slug')->label('Slug'),
            TextInput::make('logo')->label('Logo'),
            TextInput::make('phone')->label('Téléphone'),
            TextInput::make('fax')->label('Fax'),
            TextInput::make('email')->label('Email')->email(),
            TextInput::make('website')->label('Site Web')->url(),
            TextInput::make('address')->label('Adresse'),
            TextInput::make('location')->label('Emplacement'),
            TextInput::make('responsable_name')->label('Nom du responsable'),
            RichEditor::make('description')->label('Description'),
            Toggle::make('publier')->label('Publié')->default(false),
            Toggle::make('validation')->label('Validé')->default(false),
            Select::make('domaine_id')
                ->label('Domaine')
                ->relationship('domaine', 'designation_fr')
                ->searchable(), // facultatif, tu peux l'enlever
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation')->label('Nom'),
                TextColumn::make('email')->label('Email'),
                IconColumn::make('publier')->boolean()->label('Publié'),
                IconColumn::make('validation')->boolean()->label('Validé'),
            ])
            ->filters([
                //
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
            // Relations si besoin (ex: utilisateurs, stages...)
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEntreprises::route('/'),
            'create' => Pages\CreateEntreprise::route('/create'),
            'edit' => Pages\EditEntreprise::route('/{record}/edit'),
        ];
    }
}
