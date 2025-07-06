<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StageEtesResource\Pages;
use App\Filament\Resources\StageEtesResource\RelationManagers;
use App\Models\StageEtes;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class StageEtesResource extends BaseResource
{
    protected static ?string $model = StageEtes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('test')->nullable(),
                Textarea::make('description')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                DatePicker::make('deleted_at')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('test'),
            static::CustomTextColumn('description'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('deleted_at'),
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
            'index' => Pages\ListStageEtes::route('/'),
            'create' => Pages\CreateStageEtes::route('/create'),
            'edit' => Pages\EditStageEtes::route('/{record}/edit'),
        ];
    }
}
