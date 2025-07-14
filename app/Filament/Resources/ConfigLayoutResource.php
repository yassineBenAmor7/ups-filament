<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConfigLayoutResource\Pages;
use App\Models\ConfigLayout;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class ConfigLayoutResource extends BaseResource
{
    protected static ?string $model = ConfigLayout::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->label('Titre')->maxlength(255),
            Textarea::make('specific_data')->label('Données spécifiques'),
            TextInput::make('title_bg_banner')->label('Titre de la bannière')->maxlength(255),
            TextInput::make('route')->label('Route'),
            TextInput::make('display_type')->label('Type d’affichage')->maxlength(255),
            Textarea::make('widgets')->label('Widgets'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Titre'),
                TextColumn::make('route')->label('Route'),
                TextColumn::make('display_type')->label('Type'),
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
            'index' => Pages\ListConfigLayouts::route('/'),
            'create' => Pages\CreateConfigLayout::route('/create'),
            'edit' => Pages\EditConfigLayout::route('/{record}/edit'),
        ];
    }
}
