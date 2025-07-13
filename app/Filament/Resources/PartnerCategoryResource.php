<?php

namespace App\Filament\Resources;

use App\Models\PartnerCategory;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use App\Filament\Resources\PartnerCategoryResource\Pages;

class PartnerCategoryResource extends BaseResource
{
    protected static ?string $model = PartnerCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->nullable(),
            TextInput::make('designation_en')->nullable(),
            TextInput::make('designation_ar')->nullable(),
            TextInput::make('publier')->nullable(),
            TextInput::make('created_by')->nullable(),
            TextInput::make('updated_by')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('publier'),
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
            'index' => Pages\ListPartnerCategories::route('/'),
            'create' => Pages\CreatePartnerCategory::route('/create'),
            'edit' => Pages\EditPartnerCategory::route('/{record}/edit'),
        ];
    }
}
