<?php

namespace App\Filament\Resources;

use App\Models\Page;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Textarea;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\PageResource\Pages;

class PageResource extends BaseResource
{
    protected static ?string $model = Page::class;
    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('author_id')->nullable(),
            TextInput::make('image')->nullable(),
            TextInput::make('slug')->unique()->required(),
            Textarea::make('meta_description')->nullable(),
            Textarea::make('meta_keywords')->nullable(),
            TextInput::make('created_by')->nullable(),
            TextInput::make('updated_by')->nullable(),
            TextInput::make('publier')->default(1),
            Textarea::make('pdf')->nullable(),
            TextInput::make('designation_fr')->nullable(),
            TextInput::make('designation_en')->nullable(),
            TextInput::make('designation_ar')->nullable(),
            RichEditor::make('short_description_fr')->nullable(),
            RichEditor::make('short_description_en')->nullable(),
            RichEditor::make('short_description_ar')->nullable(),
            RichEditor::make('description_fr')->nullable(),
            RichEditor::make('description_en')->nullable(),
            RichEditor::make('description_ar')->nullable(),
            RichEditor::make('target')->nullable(),
            TextInput::make('parent_id')->nullable(),
            Textarea::make('display_type')->nullable(),
            Textarea::make('link')->nullable(),
            Textarea::make('files')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('author_id'),
            static::CustomTextColumn('image'),
            static::CustomTextColumn('slug'),
            static::CustomTextColumn('meta_description'),
            static::CustomTextColumn('meta_keywords'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('pdf'),
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('short_description_fr'),
            static::CustomTextColumn('short_description_en'),
            static::CustomTextColumn('short_description_ar'),
            static::CustomTextColumn('description_fr'),
            static::CustomTextColumn('description_en'),
            static::CustomTextColumn('description_ar'),
            static::CustomTextColumn('target'),
            static::CustomTextColumn('parent_id'),
            static::CustomTextColumn('display_type'),
            static::CustomTextColumn('link'),
            static::CustomTextColumn('files'),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
