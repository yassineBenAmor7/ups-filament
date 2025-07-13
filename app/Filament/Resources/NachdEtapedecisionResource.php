<?php

namespace App\Filament\Resources;

use App\Models\NachdEtapedecision;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdEtapedecisionResource\Pages;
use Filament\Tables\Table;

class NachdEtapedecisionResource extends BaseResource
{
    protected static ?string $model = NachdEtapedecision::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    protected static ?string $navigationLabel = 'Étapes Décisions';
    protected static ?string $pluralModelLabel = 'Étapes Décisions';
    protected static ?string $modelLabel = 'Étape Décision';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                TextInput::make('etapedecision')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('etapedecision'),
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
            'index' => Pages\ListNachdEtapedecisions::route('/'),
            'create' => Pages\CreateNachdEtapedecision::route('/create'),
            'edit' => Pages\EditNachdEtapedecision::route('/{record}/edit'),
        ];
    }
}
