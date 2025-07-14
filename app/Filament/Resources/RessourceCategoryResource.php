<?php

namespace App\Filament\Resources;

use App\Models\RessourceCategory;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use App\Filament\Resources\RessourceCategoryResource\Pages;

class RessourceCategoryResource extends BaseResource
{
    protected static ?string $model = RessourceCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->nullable(),
            TextInput::make('designation_en')->nullable(),
            TextInput::make('designation_ar')->nullable(),
            TextInput::make('created_by')->nullable(),
            TextInput::make('updated_by')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
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
            'index' => Pages\ListRessourceCategories::route('/'),
            'create' => Pages\CreateRessourceCategory::route('/create'),
            'edit' => Pages\EditRessourceCategory::route('/{record}/edit'),
        ];
    }
}
