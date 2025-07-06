<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StagesActivitiesResource\Pages;
use App\Models\StagesActivities;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class StagesActivitiesResource extends BaseResource
{
    protected static ?string $model = StagesActivities::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('stage_id')->numeric()->nullable(),
                TextInput::make('candidat_id')->numeric()->nullable(),
                DatePicker::make('activity_date')->nullable(),
                Textarea::make('description')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('stage_id'),
            static::CustomTextColumn('candidat_id'),
            static::CustomTextColumn('activity_date'),
            static::CustomTextColumn('description'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListStagesActivities::route('/'),
            'create' => Pages\CreateStagesActivities::route('/create'),
            'edit' => Pages\EditStagesActivities::route('/{record}/edit'),
        ];
    }
}
