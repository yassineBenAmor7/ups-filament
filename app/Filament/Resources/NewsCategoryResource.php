<?php

namespace App\Filament\Resources;

use App\Models\NewsCategory;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NewsCategoryResource\Pages;
use Filament\Tables\Table;

class NewsCategoryResource extends BaseResource
{
    protected static ?string $model = NewsCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'News Categories';
    protected static ?string $pluralModelLabel = 'News Categories';
    protected static ?string $modelLabel = 'News Category';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                // TextInput::make('created_by')->nullable(),
                // TextInput::make('updated_by')->nullable(),
                Select::make('parent_id')->relationship('parent', 'id')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            // static::CustomTextColumn('created_by'),
            // static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('parent_id'),
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
            'index' => Pages\ListNewsCategories::route('/'),
            'create' => Pages\CreateNewsCategory::route('/create'),
            'edit' => Pages\EditNewsCategory::route('/{record}/edit'),
        ];
    }
}
