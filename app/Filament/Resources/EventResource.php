<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use App\Models\Organism;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class EventResource extends BaseResource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->label('Désignation (FR)')->maxLength(255),
            TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(255),
            TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(255),
            TextInput::make('cover')->label('Image'),
            TextInput::make('place')->label('Lieu'),
            TextInput::make('organizer')->label('Organisateur'),
            DatePicker::make('date_start')->label('Date début'),
            DatePicker::make('date_end')->label('Date fin'),
            RichEditor::make('description_fr')->label('Description (FR)'),
            RichEditor::make('description_en')->label('Description (EN)'),
            RichEditor::make('description_ar')->label('Description (AR)'),
            Toggle::make('publier')->label('Publié')->default(false),
            Select::make('organism_id')
                ->label('Organisme')
                ->relationship('organism', 'designation_fr'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->label('Désignation'),
                TextColumn::make('place')->label('Lieu'),
                IconColumn::make('publier')->boolean()->label('Publié'),
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
            // Tu peux ajouter les RelationManagers ici pour category et types
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
