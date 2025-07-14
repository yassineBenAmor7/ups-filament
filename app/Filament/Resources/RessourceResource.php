<?php

namespace App\Filament\Resources;

use App\Models\Ressource;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Table;
use App\Filament\Resources\RessourceResource\Pages;

class RessourceResource extends BaseResource
{
    protected static ?string $model = Ressource::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('ressource_category_id')->relationship('ressourceCategory', 'designation_fr')->nullable(),
            TextInput::make('designation_fr')->nullable(),
            TextInput::make('designation_en')->nullable(),
            TextInput::make('designation_ar')->nullable(),
            Textarea::make('cover')->nullable(),
            TextInput::make('pu')->numeric()->nullable(),
            TextInput::make('quantity')->numeric()->nullable(),
            Textarea::make('note')->nullable(),
            Select::make('supplier_id')->relationship('supplier', 'raison_social')->nullable(),
            Textarea::make('description_fr')->nullable(),
            Textarea::make('description_en')->nullable(),
            Textarea::make('description_ar')->nullable(),
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
            static::CustomTextColumn('pu'),
            static::CustomTextColumn('quantity'),
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
            'index' => Pages\ListRessources::route('/'),
            'create' => Pages\CreateRessource::route('/create'),
            'edit' => Pages\EditRessource::route('/{record}/edit'),
        ];
    }
}
