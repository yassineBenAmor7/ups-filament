<?php

namespace App\Filament\Resources;

use App\Models\RessourceSupplier;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Table;
use App\Filament\Resources\RessourceSupplierResource\Pages;

class RessourceSupplierResource extends BaseResource
{
    protected static ?string $model = RessourceSupplier::class;

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Textarea::make('logo')->nullable(),
            TextInput::make('raison_social')->nullable(),
            TextInput::make('mf')->nullable(),
            Textarea::make('address')->nullable(),
            TextInput::make('email')->nullable(),
            TextInput::make('phone1')->nullable(),
            TextInput::make('phone2')->nullable(),
            Textarea::make('website')->nullable(),
            Textarea::make('domaine')->nullable(),
            TextInput::make('responsable_name')->nullable(),
            TextInput::make('responsable_email')->nullable(),
            TextInput::make('responsable_phone')->nullable(),
            TextInput::make('created_by')->nullable(),
            TextInput::make('updated_by')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('raison_social'),
            static::CustomTextColumn('mf'),
            static::CustomTextColumn('email'),
            static::CustomTextColumn('phone1'),
            static::CustomTextColumn('phone2'),
            static::CustomTextColumn('responsable_name'),
            static::CustomTextColumn('responsable_email'),
            static::CustomTextColumn('responsable_phone'),
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
            'index' => Pages\ListRessourceSuppliers::route('/'),
            'create' => Pages\CreateRessourceSupplier::route('/create'),
            'edit' => Pages\EditRessourceSupplier::route('/{record}/edit'),
        ];
    }
}
