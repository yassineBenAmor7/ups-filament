<?php

namespace App\Filament\Resources;

use App\Models\News;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\NewsResource\Pages;

class NewsResource extends BaseResource
{
    protected static ?string $model = News::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'News';
    protected static ?string $pluralModelLabel = 'News';
    protected static ?string $modelLabel = 'News';

    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                TextInput::make('designation_fr')->nullable(),
                TextInput::make('designation_en')->nullable(),
                TextInput::make('designation_ar')->nullable(),
                TextInput::make('cover')->nullable(),
                RichEditor::make('short_description_fr')->nullable(),
                RichEditor::make('short_description_en')->nullable(),
                RichEditor::make('short_description_ar')->nullable(),
                RichEditor::make('description_fr')->nullable(),
                RichEditor::make('description_en')->nullable(),
                RichEditor::make('description_ar')->nullable(),
                TextInput::make('publier')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                TextInput::make('for')->nullable(),
                Select::make('organism_id')->relationship('organism', 'id')->nullable(),
                TextInput::make('slug')->nullable(),
                Textarea::make('files')->nullable(),
                TextInput::make('a_la_une')->nullable(),
                Textarea::make('target')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('cover'),
            static::CustomTextColumn('short_description_fr'),
            static::CustomTextColumn('short_description_en'),
            static::CustomTextColumn('short_description_ar'),
            static::CustomTextColumn('description_fr'),
            static::CustomTextColumn('description_en'),
            static::CustomTextColumn('description_ar'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('for'),
            static::CustomTextColumn('organism_id'),
            static::CustomTextColumn('slug'),
            static::CustomTextColumn('files'),
            static::CustomTextColumn('a_la_une'),
            static::CustomTextColumn('target'),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
