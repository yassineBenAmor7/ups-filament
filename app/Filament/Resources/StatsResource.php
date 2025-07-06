<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatsResource\Pages;
use App\Models\Stats;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;

class StatsResource extends BaseResource
{
    protected static ?string $model = Stats::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                TextInput::make('value')->nullable(),
                TextInput::make('cover')->nullable(),
                TextInput::make('order')->numeric()->nullable(),
                TextInput::make('route')->nullable(),
                TextInput::make('year_id')->numeric()->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('value'),
            static::CustomTextColumn('cover'),
            static::CustomTextColumn('order'),
            static::CustomTextColumn('route'),
            static::CustomTextColumn('year_id'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
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
            'index' => Pages\ListStats::route('/'),
            'create' => Pages\CreateStats::route('/create'),
            'edit' => Pages\EditStats::route('/{record}/edit'),
        ];
    }
}
