<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StageDocumentTypesResource\Pages;
use App\Models\StageDocumentTypes;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class StageDocumentTypesResource extends BaseResource
{
    protected static ?string $model = StageDocumentTypes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
                TextInput::make('is_required')->numeric()->nullable(),
                TextInput::make('slug')->nullable(),
                TextInput::make('order')->numeric()->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('is_required'),
            static::CustomTextColumn('slug'),
            static::CustomTextColumn('order'),
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
            'index' => Pages\ListStageDocumentTypes::route('/'),
            'create' => Pages\CreateStageDocumentTypes::route('/create'),
            'edit' => Pages\EditStageDocumentTypes::route('/{record}/edit'),
        ];
    }
}
