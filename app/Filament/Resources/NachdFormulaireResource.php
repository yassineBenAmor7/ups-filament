<?php

namespace App\Filament\Resources;

use App\Models\NachdFormulaire;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdFormulaireResource\Pages;
use Filament\Tables\Table;

class NachdFormulaireResource extends BaseResource
{
    protected static ?string $model = NachdFormulaire::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Formulaires';
    protected static ?string $pluralModelLabel = 'Formulaires';
    protected static ?string $modelLabel = 'Formulaire';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                TextInput::make('name_fr')->nullable(),
                TextInput::make('name_en')->nullable(),
                TextInput::make('name_ar')->nullable(),
                TextInput::make('action')->nullable(),
                TextInput::make('method')->nullable(),
                TextInput::make('accept_files')->nullable(),
                TextInput::make('code')->nullable(),
                TextInput::make('decision')->nullable(),
                TextInput::make('for')->nullable(),
                TextInput::make('one')->nullable(),
                DatePicker::make('date_debut')->nullable(),
                DatePicker::make('date_fin')->nullable(),
                Textarea::make('photo_supp_1')->nullable(),
                Textarea::make('photo_supp_2')->nullable(),
                TextInput::make('position_photo_1')->nullable(),
                TextInput::make('position_photo_2')->nullable(),
                Textarea::make('note')->nullable(),
                Textarea::make('entete')->nullable(),
                Textarea::make('footer')->nullable(),
                // TextInput::make('created_by')->nullable(),
                // TextInput::make('updated_by')->nullable(),
                Select::make('nachd_formulaire_groupement_id')->relationship('nachdFormulaireGroupement', 'id')->nullable(),
                Textarea::make('response_model')->nullable(),
                Textarea::make('response_header')->nullable(),
                Textarea::make('response_footer')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('name_fr'),
            static::CustomTextColumn('name_en'),
            static::CustomTextColumn('name_ar'),
            static::CustomTextColumn('action'),
            static::CustomTextColumn('method'),
            static::CustomTextColumn('accept_files'),
            static::CustomTextColumn('code'),
            static::CustomTextColumn('decision'),
            static::CustomTextColumn('for'),
            static::CustomTextColumn('one'),
            static::CustomTextColumn('date_debut'),
            static::CustomTextColumn('date_fin'),
            static::CustomTextColumn('photo_supp_1'),
            static::CustomTextColumn('photo_supp_2'),
            static::CustomTextColumn('position_photo_1'),
            static::CustomTextColumn('position_photo_2'),
            static::CustomTextColumn('note'),
            static::CustomTextColumn('entete'),
            static::CustomTextColumn('footer'),
            // static::CustomTextColumn('created_by'),
            // static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('nachd_formulaire_groupement_id'),
            static::CustomTextColumn('response_model'),
            static::CustomTextColumn('response_header'),
            static::CustomTextColumn('response_footer'),
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
            'index' => Pages\ListNachdFormulaires::route('/'),
            'create' => Pages\CreateNachdFormulaire::route('/create'),
            'edit' => Pages\EditNachdFormulaire::route('/{record}/edit'),
        ];
    }
}
