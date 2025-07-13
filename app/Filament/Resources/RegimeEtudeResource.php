<?php

namespace App\Filament\Resources;

use App\Models\RegimeEtude;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Table;
use App\Filament\Resources\RegimeEtudeResource\Pages;

class RegimeEtudeResource extends BaseResource
{
    protected static ?string $model = RegimeEtude::class;

    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Toggle::make('publier')->nullable(),
            TextInput::make('created_by')->nullable(),
            TextInput::make('updated_by')->nullable(),
                ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
        ];
    }

    public static function getExtraFilters(): array
    {
        return [];
    }

    public static function table(Table $table): Table
    {
        return parent::table($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegimeEtudes::route('/'),
            'create' => Pages\CreateRegimeEtude::route('/create'),
            'edit' => Pages\EditRegimeEtude::route('/{record}/edit'),
        ];
    }
}
