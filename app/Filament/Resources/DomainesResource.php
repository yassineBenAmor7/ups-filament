<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DomainesResource\Pages;
use App\Models\Domaines;
use Faker\Provider\Base;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class DomainesResource extends BaseResource
{
    protected static ?string $model = Domaines::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                DatePicker::make('created_at')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('created_at'),
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
            'index' => Pages\ListDomaines::route('/'),
            'create' => Pages\CreateDomaines::route('/create'),
            'edit' => Pages\EditDomaines::route('/{record}/edit'),
        ];
    }
}
