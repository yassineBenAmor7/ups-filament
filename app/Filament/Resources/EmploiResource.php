<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmploiResource\Pages;
use App\Models\Emploi;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Table;

class EmploiResource extends BaseResource
{
    protected static ?string $model = Emploi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('type')
                ->label('Type')
                ->required()
                ->maxLength(100),
            TextInput::make('link')
                ->label('Lien')
                ->url()
                ->maxLength(255),
            TextInput::make('from')
                ->label('Depuis'),
            TextInput::make('note')
                ->label('Note')
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')->label('Type'),
                TextColumn::make('link')->label('Lien')->limit(30),
                TextColumn::make('from')->label('Depuis'),
                TextColumn::make('note')->label('Note')->limit(50),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmplois::route('/'),
            'create' => Pages\CreateEmploi::route('/create'),
            'edit' => Pages\EditEmploi::route('/{record}/edit'),
        ];
    }
}
