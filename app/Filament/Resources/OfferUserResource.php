<?php

namespace App\Filament\Resources;

use App\Models\OfferUser;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use App\Filament\Resources\OfferUserResource\Pages;
use Filament\Tables\Table;

class OfferUserResource extends BaseResource
{
    protected static ?string $model = OfferUser::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('offer_id')
                ->relationship('offer', 'designation_fr')
                ->nullable(),
            Select::make('user_id')
                ->relationship('user', 'name')
                ->nullable(),
            Textarea::make('note')->nullable(),
            // TextInput::make('created_by')->nullable(),
            // TextInput::make('updated_by')->nullable(),
            TextInput::make('seen')->nullable()->label('vu'),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('offer_id'),
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('note'),
            // static::CustomTextColumn('created_by'),
            // static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('seen'),
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
            'index' => Pages\ListOfferUsers::route('/'),
            'create' => Pages\CreateOfferUser::route('/create'),
            'edit' => Pages\EditOfferUser::route('/{record}/edit'),
        ];
    }
}
