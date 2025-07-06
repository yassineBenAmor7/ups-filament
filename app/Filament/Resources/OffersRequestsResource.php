<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffersrequestsResource\Pages;
use App\Models\Offersrequests;
use Faker\Provider\Base;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class OffersrequestsResource extends BaseResource
{
    protected static ?string $model = Offersrequests::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_id')->numeric()->nullable(),
                TextInput::make('type_id')->numeric()->nullable(),
                TextInput::make('domaine')->nullable(),
                Textarea::make('description')->nullable(),
                DatePicker::make('start_date')->nullable(),
                DatePicker::make('end_date')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('type_id'),
            static::CustomTextColumn('domaine'),
            static::CustomTextColumn('description'),
            static::CustomTextColumn('start_date'),
            static::CustomTextColumn('end_date'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('publier'),
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
            'index' => Pages\ListOffersrequests::route('/'),
            'create' => Pages\CreateOffersrequests::route('/create'),
            'edit' => Pages\EditOffersrequests::route('/{record}/edit'),
        ];
    }
}
