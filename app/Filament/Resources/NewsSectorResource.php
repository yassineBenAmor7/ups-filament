<?php

namespace App\Filament\Resources;

use App\Models\NewsSector;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NewsSectorResource\Pages;
use Filament\Tables\Table;

class NewsSectorResource extends BaseResource
{
    protected static ?string $model = NewsSector::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('news_id')->relationship('news', 'id')->nullable(),
                Select::make('sector_id')->relationship('sector', 'id')->nullable(),
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
            static::CustomTextColumn('sector_id'),
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
            'index' => Pages\ListNewsSectors::route('/'),
            'create' => Pages\CreateNewsSector::route('/create'),
            'edit' => Pages\EditNewsSector::route('/{record}/edit'),
        ];
    }
}
