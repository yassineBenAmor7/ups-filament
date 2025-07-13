<?php

namespace App\Filament\Resources;

use App\Models\OfferType;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\OfferTypeResource\Pages;
use Filament\Tables\Table;

class OfferTypeResource extends BaseResource
{
    protected static ?string $model = OfferType::class;
    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                TextInput::make('cover_fr')->nullable(),
                TextInput::make('cover_en')->nullable(),
                TextInput::make('cover_ar')->nullable(),
                TextInput::make('publier')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
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
            static::CustomTextColumn('cover_fr'),
            static::CustomTextColumn('cover_en'),
            static::CustomTextColumn('cover_ar'),
            static::CustomTextColumn('publier'),
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
            'index' => Pages\ListOfferTypes::route('/'),
            'create' => Pages\CreateOfferType::route('/create'),
            'edit' => Pages\EditOfferType::route('/{record}/edit'),
        ];
    }
}
