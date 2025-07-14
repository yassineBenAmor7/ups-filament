<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventsTypeResource\Pages;
use App\Models\EventsType;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class EventsTypeResource extends BaseResource
{
    protected static ?string $model = EventsType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->label('Désignation (FR)')->maxLength(100),
            TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(100),
            TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(100),
            Select::make('parent_id')
                ->label('Type parent')
                ->relationship('parentId', 'designation_fr')
                ->preload(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->label('Désignation (FR)'),
                TextColumn::make('parentId.designation_fr')->label('Type parent'),
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
            // Tu peux ajouter un RelationManager ici si tu as des événements liés
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEventsTypes::route('/'),
            'create' => Pages\CreateEventsType::route('/create'),
            'edit' => Pages\EditEventsType::route('/{record}/edit'),
        ];
    }
}
