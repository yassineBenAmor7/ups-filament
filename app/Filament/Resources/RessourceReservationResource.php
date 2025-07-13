<?php

namespace App\Filament\Resources;

use App\Models\RessourceReservation;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Table;
use App\Filament\Resources\RessourceReservationResource\Pages;

class RessourceReservationResource extends BaseResource
{
    protected static ?string $model = RessourceReservation::class;

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('user_id')->nullable(),
            TextInput::make('product_id')->nullable(),
            TextInput::make('user_name')->nullable(),
            TextInput::make('user_cin')->nullable(),
            TextInput::make('product')->nullable(),
            TextInput::make('product_category')->nullable(),
            TextInput::make('etat')->nullable(),
            TextInput::make('etat_deadline')->nullable(),
            TextInput::make('created_by')->nullable(),
            TextInput::make('updated_by')->nullable(),

        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('product_id'),
            static::CustomTextColumn('user_name'),
            static::CustomTextColumn('user_cin'),
            static::CustomTextColumn('product'),
            static::CustomTextColumn('product_category'),
            static::CustomTextColumn('etat'),
            static::CustomTextColumn('etat_deadline'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),

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
            'index' => Pages\ListRessourceReservations::route('/'),
            'create' => Pages\CreateRessourceReservation::route('/create'),
            'edit' => Pages\EditRessourceReservation::route('/{record}/edit'),
        ];
    }
}
