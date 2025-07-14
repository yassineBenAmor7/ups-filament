<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvLanguageResource\Pages;
use App\Models\CvLanguage;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class CvLanguageResource extends BaseResource
{
    protected static ?string $model = CvLanguage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation')->label('Langue'),
            Toggle::make('publier')->label('Publié'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation')->label('Langue'),
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
            'index' => Pages\ListCvLanguages::route('/'),
            'create' => Pages\CreateCvLanguage::route('/create'),
            'edit' => Pages\EditCvLanguage::route('/{record}/edit'),
        ];
    }
}
