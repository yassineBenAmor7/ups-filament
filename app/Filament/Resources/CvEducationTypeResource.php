<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvEducationTypeResource\Pages;
use App\Models\CvEducationType;
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

class CvEducationTypeResource extends BaseResource
{
    protected static ?string $model = CvEducationType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->label('Désignation (FR)'),
            TextInput::make('designation_en')->label('Désignation (EN)'),
            TextInput::make('designation_ar')->label('Désignation (AR)'),
            Toggle::make('publier')->label('Publié'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->label('Désignation'),
                IconColumn::make('publier')->label('Publié')->boolean(),
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
            'index' => Pages\ListCvEducationTypes::route('/'),
            'create' => Pages\CreateCvEducationType::route('/create'),
            'edit' => Pages\EditCvEducationType::route('/{record}/edit'),
        ];
    }
}
