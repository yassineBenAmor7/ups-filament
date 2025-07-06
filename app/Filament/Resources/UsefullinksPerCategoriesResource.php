<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsefullinksPerCategoriesResource\Pages;
use App\Models\UsefullinksPerCategories;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class UsefullinksPerCategoriesResource extends BaseResource
{
    protected static ?string $model = UsefullinksPerCategories::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('usefullink_id')->numeric()->nullable(),
                TextInput::make('usefullinks_categorie_id')->numeric()->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('usefullink_id'),
            static::CustomTextColumn('usefullinks_categorie_id'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListUsefullinksPerCategories::route('/'),
            'create' => Pages\CreateUsefullinksPerCategories::route('/create'),
            'edit' => Pages\EditUsefullinksPerCategories::route('/{record}/edit'),
        ];
    }
}
