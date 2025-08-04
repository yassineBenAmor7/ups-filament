<?php

namespace App\Filament\Resources;

use App\Models\PlaquettePedagogique;
use App\Models\Year;
use App\Filament\Resources\PlaquettePedagogiqueResource\Pages;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class PlaquettePedagogiqueResource extends BaseResource
{
    protected static ?string $model = PlaquettePedagogique::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('description_fr'),
            TextInput::make('description_en'),
            TextInput::make('description_ar'),

            Select::make('sector_id')
                ->relationship('Sector', 'designation_fr')
                ->required(),

            Select::make('year_id')
                ->relationship('year', 'designation')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return parent::table($table);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('description_fr'),
            static::CustomTextColumn('description_en'),
            static::CustomTextColumn('description_ar'),
            static::CustomTextColumn('Sector.designation_fr'),
            static::CustomTextColumn('year.designation'),
        ];
    }

    public static function getExtraFilters(): array
    {
        return [];
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlaquettePedagogiques::route('/'),
            'create' => Pages\CreatePlaquettePedagogique::route('/create'),
            'edit' => Pages\EditPlaquettePedagogique::route('/{record}/edit'),
        ];
    }
}
