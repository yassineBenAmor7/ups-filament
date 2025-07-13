<?php

namespace App\Filament\Resources;

use App\Models\OfferRequest;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use App\Filament\Resources\OfferRequestResource\Pages;
use Filament\Tables\Table;

class OfferRequestResource extends BaseResource
{
    protected static ?string $model = OfferRequest::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('user_id')
                ->relationship('user', 'name')
                ->nullable(),
            Select::make('type_id')
                ->relationship('offerType', 'designation_fr')
                ->nullable(),
            TextInput::make('domaine')->nullable(),
            Textarea::make('description')->nullable(),
            DatePicker::make('start_date')->nullable(),
            DatePicker::make('end_date')->nullable(),
            TextInput::make('created_by')->nullable(),
            TextInput::make('updated_by')->nullable(),
            TextInput::make('publier')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('type_id'),
            static::CustomTextColumn('domaine'),
            static::CustomTextColumn('description'),
            static::CustomTextColumn('start_date'),
            static::CustomTextColumn('end_date'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('publier'),
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
            'index' => Pages\ListOfferRequests::route('/'),
            'create' => Pages\CreateOfferRequest::route('/create'),
            'edit' => Pages\EditOfferRequest::route('/{record}/edit'),
        ];
    }
}
