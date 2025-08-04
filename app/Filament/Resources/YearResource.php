<?php

namespace App\Filament\Resources;

use App\Models\Year;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\YearResource\Pages;
use Filament\Tables\Table;

class YearResource extends BaseResource
{
    protected static ?string $model = Year::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationLabel = 'Years';
    protected static ?string $pluralModelLabel = 'Years';
    protected static ?string $modelLabel = 'Year';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation')
                ->required()
                ->length(4)
                ->label('Année'),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('designation'),
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
            'index' => Pages\ListYears::route('/'),
            'create' => Pages\CreateYear::route('/create'),
            'edit' => Pages\EditYear::route('/{record}/edit'),
        ];
    }
}
