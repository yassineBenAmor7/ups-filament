<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClubUserResource\Pages;
use App\Models\ClubUser;
use App\Models\User;
use App\Models\Club;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class ClubUserResource extends BaseResource
{
    protected static ?string $model = ClubUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('club_id')
                ->label('Club')
                ->relationship('club', 'designation_fr'),
            Select::make('user_id')
                ->label('Utilisateur')
                ->relationship('user', 'name'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('club.designation_fr')->label('Club'),
                TextColumn::make('user.name')->label('Utilisateur'),
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
            'index' => Pages\ListClubUsers::route('/'),
            'create' => Pages\CreateClubUser::route('/create'),
            'edit' => Pages\EditClubUser::route('/{record}/edit'),
        ];
    }
}
