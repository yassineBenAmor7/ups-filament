<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffersTypesResource\Pages;
use App\Models\OffersTypes;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class OffersTypesResource extends BaseResource
{
    protected static ?string $model = OffersTypes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('cover_fr')->nullable(),
                TextInput::make('cover_en')->nullable(),
                TextInput::make('cover_ar')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('cover_fr'),
            static::CustomTextColumn('cover_en'),
            static::CustomTextColumn('cover_ar'),
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
            'index' => Pages\ListOffersTypes::route('/'),
            'create' => Pages\CreateOffersTypes::route('/create'),
            'edit' => Pages\EditOffersTypes::route('/{record}/edit'),
        ];
    }
}
