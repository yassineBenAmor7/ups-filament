<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClaimTypeResource\Pages;
use App\Models\ClaimType;
use App\Models\User;
use App\Models\ClaimDestination;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class ClaimTypeResource extends BaseResource
{
    protected static ?string $model = ClaimType::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->label('Désignation (FR)')->maxLength(100),
            TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(100),
            TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(100),
            TextInput::make('order')->label('Ordre')->numeric(),
            TextInput::make('module')->label('Module'),
            Select::make('responsible_id')->label('Responsable')->relationship('responsible', 'name'),
            Select::make('claim_destination_id')->label('Destination')->relationship('claimDestination', 'designation_fr'),
            Toggle::make('publier')->label('Publié')->default(false),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->label('Désignation'),
                TextColumn::make('module')->label('Module'),
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
            'index' => Pages\ListClaimTypes::route('/'),
            'create' => Pages\CreateClaimType::route('/create'),
            'edit' => Pages\EditClaimType::route('/{record}/edit'),
        ];
    }
}
