<?php

namespace App\Filament\Resources;

use App\Models\NachdInput;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdInputResource\Pages;
use Filament\Tables\Table;

class NachdInputResource extends BaseResource
{
    protected static ?string $model = NachdInput::class;
    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';
    protected static ?string $navigationLabel = 'Inputs';
    protected static ?string $pluralModelLabel = 'Inputs';
    protected static ?string $modelLabel = 'Input';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                TextInput::make('label_fr')->nullable(),
                TextInput::make('label_en')->nullable(),
                TextInput::make('label_ar')->nullable(),
                TextInput::make('type')->nullable(),
                TextInput::make('name')->nullable(),
                TextInput::make('value')->nullable(),
                TextInput::make('identifiant')->nullable(),
                TextInput::make('class_style')->nullable(),
                TextInput::make('placeholder')->nullable(),
                TextInput::make('zone')->nullable(),
                Textarea::make('options')->nullable(),
                TextInput::make('model_bd')->nullable(),
                TextInput::make('information_recuperable')->nullable(),
                TextInput::make('attribut_to_use')->nullable(),
                TextInput::make('table_to_use')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('label_fr'),
            static::CustomTextColumn('label_en'),
            static::CustomTextColumn('label_ar'),
            static::CustomTextColumn('type'),
            static::CustomTextColumn('name'),
            static::CustomTextColumn('value'),
            static::CustomTextColumn('identifiant'),
            static::CustomTextColumn('class_style'),
            static::CustomTextColumn('placeholder'),
            static::CustomTextColumn('zone'),
            static::CustomTextColumn('options'),
            static::CustomTextColumn('model_bd'),
            static::CustomTextColumn('information_recuperable'),
            static::CustomTextColumn('attribut_to_use'),
            static::CustomTextColumn('table_to_use'),
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
            'index' => Pages\ListNachdInputs::route('/'),
            'create' => Pages\CreateNachdInput::route('/create'),
            'edit' => Pages\EditNachdInput::route('/{record}/edit'),
        ];
    }
}
