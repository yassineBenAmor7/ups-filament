<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WidgetsResource\Pages;
use App\Filament\Resources\WidgetsResource\RelationManagers;
use App\Models\Widgets;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class WidgetsResource extends BaseResource
{
    protected static ?string $model = Widgets::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                TextInput::make('order')->numeric()->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                DatePicker::make('deleted_at')->nullable(),
                TextInput::make('icon')->nullable(),
                TextInput::make('link')->nullable(),
                TextInput::make('color')->nullable(),
                TextInput::make('align')->nullable(),
                TextInput::make('model_name')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('order'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('deleted_at'),
            static::CustomTextColumn('icon'),
            static::CustomTextColumn('link'),
            static::CustomTextColumn('color'),
            static::CustomTextColumn('align'),
            static::CustomTextColumn('model_name'),
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
            'index' => Pages\ListWidgets::route('/'),
            'create' => Pages\CreateWidgets::route('/create'),
            'edit' => Pages\EditWidgets::route('/{record}/edit'),
        ];
    }
}
