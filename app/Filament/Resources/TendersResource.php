<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TendersResource\Pages;
use App\Models\Tenders;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class TendersResource extends BaseResource
{
    protected static ?string $model = Tenders::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                Textarea::make('description_fr')->nullable(),
                Textarea::make('description_en')->nullable(),
                Textarea::make('description_ar')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
                Textarea::make('files')->nullable(),
                Textarea::make('cdc')->nullable(),
                Textarea::make('resultat')->nullable(),
                Textarea::make('avis')->nullable(),
                TextInput::make('start_date')->nullable(),
                TextInput::make('end_date')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('slug')->nullable(),
                TextInput::make('consultation_number')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('description_fr'),
            static::CustomTextColumn('description_en'),
            static::CustomTextColumn('description_ar'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('files'),
            static::CustomTextColumn('cdc'),
            static::CustomTextColumn('resultat'),
            static::CustomTextColumn('avis'),
            static::CustomTextColumn('start_date'),
            static::CustomTextColumn('end_date'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('slug'),
            static::CustomTextColumn('consultation_number'),
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
            'index' => Pages\ListTenders::route('/'),
            'create' => Pages\CreateTenders::route('/create'),
            'edit' => Pages\EditTenders::route('/{record}/edit'),
        ];
    }
}
