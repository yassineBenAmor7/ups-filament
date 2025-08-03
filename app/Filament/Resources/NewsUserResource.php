<?php

namespace App\Filament\Resources;

use App\Models\NewsUser;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NewsUserResource\Pages;
use Filament\Tables\Table;

class NewsUserResource extends BaseResource
{
    protected static ?string $model = NewsUser::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('news_id')->relationship('news', 'id')->nullable(),
                Select::make('user_id')->relationship('user', 'id')->nullable(),
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
            static::CustomTextColumn('user_id'),
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
            'index' => Pages\ListNewsUsers::route('/'),
            'create' => Pages\CreateNewsUser::route('/create'),
            'edit' => Pages\EditNewsUser::route('/{record}/edit'),
        ];
    }
}
