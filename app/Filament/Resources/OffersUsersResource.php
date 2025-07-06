<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffersUsersResource\Pages;
use App\Models\OffersUsers;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class OffersUsersResource extends BaseResource
{
    protected static ?string $model = OffersUsers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('offer_id')->numeric()->nullable(),
                TextInput::make('user_id')->numeric()->nullable(),
                Textarea::make('note')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('seen')->numeric()->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('offer_id'),
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('note'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('seen'),
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
            'index' => Pages\ListOffersUsers::route('/'),
            'create' => Pages\CreateOffersUsers::route('/create'),
            'edit' => Pages\EditOffersUsers::route('/{record}/edit'),
        ];
    }
}
