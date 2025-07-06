<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TranslationsResource\Pages;
use App\Models\Translations;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class TranslationsResource extends BaseResource
{
    protected static ?string $model = Translations::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('table_name')->required(),
                TextInput::make('column_name')->required(),
                TextInput::make('foreign_key')->numeric()->required(),
                TextInput::make('locale')->required(),
                TextInput::make('value')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('table_name'),
            static::CustomTextColumn('column_name'),
            static::CustomTextColumn('foreign_key'),
            static::CustomTextColumn('locale'),
            static::CustomTextColumn('value'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
        ];
    }

    public static function table(Table $table): Table
    {
        return parent::table($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslations::route('/create'),
            'edit' => Pages\EditTranslations::route('/{record}/edit'),
        ];
    }
}
