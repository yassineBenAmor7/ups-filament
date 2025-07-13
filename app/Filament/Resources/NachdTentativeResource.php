<?php

namespace App\Filament\Resources;

use App\Models\NachdTentative;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NachdTentativeResource\Pages;
use Filament\Tables\Table;

class NachdTentativeResource extends BaseResource
{
    protected static ?string $model = NachdTentative::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationLabel = 'Tentatives';
    protected static ?string $pluralModelLabel = 'Tentatives';
    protected static ?string $modelLabel = 'Tentative';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                TextInput::make('tentative')->nullable(),
                TextInput::make('confirmation')->nullable(),
                TextInput::make('author_id')->nullable(),
                DateTimePicker::make('date_acceptation')->nullable(),
                DateTimePicker::make('date_reception')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                Textarea::make('response_paper')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('tentative'),
            static::CustomTextColumn('confirmation'),
            static::CustomTextColumn('author_id'),
            static::CustomTextColumn('date_acceptation'),
            static::CustomTextColumn('date_reception'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('response_paper'),
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
            'index' => Pages\ListNachdTentatives::route('/'),
            'create' => Pages\CreateNachdTentative::route('/create'),
            'edit' => Pages\EditNachdTentative::route('/{record}/edit'),
        ];
    }
}
