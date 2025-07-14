<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormationResource\Pages;
use App\Models\Formation;
use App\Models\FormationType;
use App\Models\Specialite;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class FormationResource extends BaseResource
{
    protected static ?string $model = Formation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('type_id')
                ->label('Type de formation')
                ->relationship('type', 'designation_fr'),
            
            Select::make('specialite_id')
                ->label('Spécialité')
                ->relationship('specialite', 'designation_fr'),

            TextInput::make('designation_fr')->label('Désignation (FR)')->maxLength(255),
            TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(255),
            TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(255),
            TextInput::make('plan_etude')->label('Plan d\'étude')->maxLength(255),

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
                TextColumn::make('type.designation_fr')->label('Type'),
                TextColumn::make('specialite.designation_fr')->label('Spécialité'),
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
            // Tu peux ajouter RelationManagers ici
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormations::route('/'),
            'create' => Pages\CreateFormation::route('/create'),
            'edit' => Pages\EditFormation::route('/{record}/edit'),
        ];
    }
}
