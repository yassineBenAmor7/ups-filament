<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TendersSubmissionsResource\Pages;
use App\Models\TendersSubmissions;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class TendersSubmissionsResource extends BaseResource
{
    protected static ?string $model = TendersSubmissions::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tender_id')->numeric()->nullable(),
                TextInput::make('entreprise_id')->numeric()->nullable(),
                Textarea::make('files')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('tender_id'),
            static::CustomTextColumn('entreprise_id'),
            static::CustomTextColumn('files'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
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
            'index' => Pages\ListTendersSubmissions::route('/'),
            'create' => Pages\CreateTendersSubmissions::route('/create'),
            'edit' => Pages\EditTendersSubmissions::route('/{record}/edit'),
        ];
    }
}
