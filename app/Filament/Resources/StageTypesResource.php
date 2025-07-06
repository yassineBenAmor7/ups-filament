<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StageTypesResource\Pages;
use App\Models\StageTypes;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class StageTypesResource extends BaseResource
{
    protected static ?string $model = StageTypes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('is_required')->numeric()->nullable(),
                TextInput::make('is_supervised')->numeric()->nullable(),
                TextInput::make('is_company')->numeric()->nullable(),
                TextInput::make('nb_candidate')->numeric()->nullable(),
                Textarea::make('appui_model')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
                Textarea::make('assignment_model')->nullable(),
                Textarea::make('company_request_sheet_model')->nullable(),
                TextInput::make('duration_min')->numeric()->nullable(),
                TextInput::make('duration_max')->numeric()->nullable(),
                TextInput::make('sector_type_id')->numeric()->nullable(),
                TextInput::make('level')->numeric()->nullable(),
                Textarea::make('convention_model')->nullable(),
                DatePicker::make('from')->nullable(),
                DatePicker::make('to')->nullable(),
                TextInput::make('etranger')->numeric()->nullable(),
                DatePicker::make('request_from')->nullable(),
                DatePicker::make('request_to')->nullable(),
                TextInput::make('prefix')->nullable(),
                Textarea::make('convention_model_en')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('is_required'),
            static::CustomTextColumn('is_supervised'),
            static::CustomTextColumn('is_company'),
            static::CustomTextColumn('nb_candidate'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('duration_min'),
            static::CustomTextColumn('duration_max'),
            static::CustomTextColumn('sector_type_id'),
            static::CustomTextColumn('level'),
            static::CustomTextColumn('from'),
            static::CustomTextColumn('to'),
            static::CustomTextColumn('etranger'),
            static::CustomTextColumn('request_from'),
            static::CustomTextColumn('request_to'),
            static::CustomTextColumn('prefix'),
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
            'index' => Pages\ListStageTypes::route('/'),
            'create' => Pages\CreateStageTypes::route('/create'),
            'edit' => Pages\EditStageTypes::route('/{record}/edit'),
        ];
    }
}
