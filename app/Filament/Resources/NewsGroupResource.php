<?php

namespace App\Filament\Resources;

use App\Models\NewsGroup;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NewsGroupResource\Pages;
use Filament\Tables\Table;

class NewsGroupResource extends BaseResource
{
    protected static ?string $model = NewsGroup::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('news_id')->relationship('news', 'id')->nullable(),
                Select::make('group_id')->relationship('group', 'id')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('news_id'),
            static::CustomTextColumn('group_id'),
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
            'index' => Pages\ListNewsGroups::route('/'),
            'create' => Pages\CreateNewsGroup::route('/create'),
            'edit' => Pages\EditNewsGroup::route('/{record}/edit'),
        ];
    }
}
