<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClaimDestinationResource\Pages;
use App\Filament\Resources\ClaimDestinationResource\RelationManagers;
use App\Models\ClaimDestination;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClaimDestinationResource extends BaseResource
{
    protected static ?string $model = ClaimDestination::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListClaimDestinations::route('/'),
            'create' => Pages\CreateClaimDestination::route('/create'),
            'edit' => Pages\EditClaimDestination::route('/{record}/edit'),
        ];
    }
}
