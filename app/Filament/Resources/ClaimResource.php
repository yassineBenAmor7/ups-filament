<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClaimResource\Pages;
use App\Models\Claim;
use App\Models\User;
use App\Models\Destination;
use App\Models\ClaimType;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class ClaimResource extends BaseResource
{
    protected static ?string $model = Claim::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('subject')->label('Sujet')->maxLength(255),
            Textarea::make('message')->label('Message'),
            TextInput::make('file')->label('Fichier'),
            Select::make('user_id')
                ->label('Utilisateur')
                ->relationship('user', 'name'),
            Select::make('claim_type_id')
                ->label('Type de réclamation')
                ->relationship('type', 'designation_fr'),
            Select::make('destination_id')
                ->label('Destination')
                ->relationship('destination', 'designation_fr'),
            Select::make('responsible_id')
                ->label('Responsable')
                ->relationship('responsable', 'name'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject')->label('Sujet'),
                TextColumn::make('type.designation_fr')->label('Type'),
                TextColumn::make('destination.designation_fr')->label('Destination'),
                TextColumn::make('responsable.name')->label('Responsable'),
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
            'index' => Pages\ListClaims::route('/'),
            'create' => Pages\CreateClaim::route('/create'),
            'edit' => Pages\EditClaim::route('/{record}/edit'),
        ];
    }
}
