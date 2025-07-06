<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffersResource\Pages;
use App\Models\Offers;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class OffersResource extends BaseResource
{
    protected static ?string $model = Offers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('company')->nullable(),
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                Textarea::make('description_fr')->nullable(),
                Textarea::make('description_en')->nullable(),
                Textarea::make('description_ar')->nullable(),
                TextInput::make('type')->nullable(),
                TextInput::make('phone')->nullable(),
                TextInput::make('address')->nullable(),
                TextInput::make('responsible')->nullable(),
                TextInput::make('email')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('cover')->nullable(),
                TextInput::make('entreprise_id')->numeric()->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
                DatePicker::make('expiration_date')->nullable(),
                TextInput::make('mode')->numeric()->nullable(),
                TextInput::make('offer_type_id')->numeric()->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('company'),
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('type'),
            static::CustomTextColumn('phone'),
            static::CustomTextColumn('address'),
            static::CustomTextColumn('responsible'),
            static::CustomTextColumn('email'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('cover'),
            static::CustomTextColumn('entreprise_id'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('expiration_date'),
            static::CustomTextColumn('mode'),
            static::CustomTextColumn('offer_type_id'),
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
            'index' => Pages\ListOffers::route('/'),
            'create' => Pages\CreateOffers::route('/create'),
            'edit' => Pages\EditOffers::route('/{record}/edit'),
        ];
    }
}
