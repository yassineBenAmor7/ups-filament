<?php

namespace App\Filament\Resources;

use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\NewsPerCategory;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\NewsPerCategoryResource\Pages;

class NewsPerCategoryResource extends BaseResource
{
    protected static ?string $model = NewsPerCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('news_id')->relationship('news', 'id')->nullable(),
                Select::make('news_category_id')->relationship('newsCategory', 'id')->nullable(),
                Toggle::make('publier')->nullable(),
                // TextInput::make('created_by')->nullable(),
                // TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('news_id'),
            static::CustomTextColumn('news_category_id'),
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
            'index' => Pages\ListNewsPerCategories::route('/'),
            'create' => Pages\CreateNewsPerCategory::route('/create'),
            'edit' => Pages\EditNewsPerCategory::route('/{record}/edit'),
        ];
    }
}
