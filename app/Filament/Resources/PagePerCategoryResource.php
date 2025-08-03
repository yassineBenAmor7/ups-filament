<?php

namespace App\Filament\Resources;

use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PagePerCategory;
use Filament\Forms\Components\Toggle;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\PagePerCategoryResource\Pages;

class PagePerCategoryResource extends BaseResource
{
    protected static ?string $model = PagePerCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('page_id')->nullable(),
            TextInput::make('page_category_id')->nullable(),
            Toggle::make('publier'),
            // TextInput::make('created_by')->nullable(),
            // TextInput::make('updated_by')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('page_id'),
            static::CustomTextColumn('page_category_id'),
            static::CustomTextColumn('publier'),
            // static::CustomTextColumn('created_by'),
            // static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListPagePerCategories::route('/'),
            'create' => Pages\CreatePagePerCategory::route('/create'),
            'edit' => Pages\EditPagePerCategory::route('/{record}/edit'),
        ];
    }
}
