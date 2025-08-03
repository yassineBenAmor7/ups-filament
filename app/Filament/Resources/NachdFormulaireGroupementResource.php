<?php

namespace App\Filament\Resources;

use App\Models\NachdFormulaireGroupement;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdFormulaireGroupementResource\Pages;
use Filament\Tables\Table;

class NachdFormulaireGroupementResource extends BaseResource
{
    protected static ?string $model = NachdFormulaireGroupement::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Formulaire Groupements';
    protected static ?string $pluralModelLabel = 'Formulaire Groupements';
    protected static ?string $modelLabel = 'Formulaire Groupement';

    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                Toggle::make('publier')->nullable(),
                // TextInput::make('created_by')->nullable(),
                // TextInput::make('updated_by')->nullable(),
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
            static::CustomTextColumn('publier'),
            // static::CustomTextColumn('created_by'),
            // static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListNachdFormulaireGroupements::route('/'),
            'create' => Pages\CreateNachdFormulaireGroupement::route('/create'),
            'edit' => Pages\EditNachdFormulaireGroupement::route('/{record}/edit'),
        ];
    }
}
