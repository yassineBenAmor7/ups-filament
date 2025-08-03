<?php

namespace App\Filament\Resources;

use App\Models\Coordinate;
use App\Models\Year;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use App\Filament\Resources\CoordinateResource\Pages;

class CoordinateResource extends BaseResource
{
    protected static ?string $model = Coordinate::class;
    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('current_year_id')->relationship('currentYear', 'designation'),
            TextInput::make('designation_fr'),
            TextInput::make('designation_en'),
            TextInput::make('designation_ar'),
            TextInput::make('abbreviation'),
            TextInput::make('addresse_fr'),
            TextInput::make('addresse_en'),
            TextInput::make('addresse_ar'),
            TextInput::make('phone'),
            TextInput::make('phone_2'),
            TextInput::make('fax'),
            TextInput::make('email'),
            TextInput::make('cover'),
            TextInput::make('university'),
            TextInput::make('ministere'),
            TextInput::make('facebook_link'),
            TextInput::make('youtube_link'),
            TextInput::make('google_link'),
            TextInput::make('linkedin_link'),
            TextInput::make('instagram_link'),
            TextInput::make('favicon'),
            FileUpload::make('logo'),
            TextInput::make('logo_footer'),
            TextInput::make('short_description_fr'),
            TextInput::make('short_description_en'),
            TextInput::make('short_description_ar'),
            RichEditor::make('description_fr'),
            RichEditor::make('description_en'),
            RichEditor::make('description_ar'),
            DatePicker::make('creation_date'),
            FileUpload::make('white_logo'),
            FileUpload::make('black_logo'),
            FileUpload::make('default_banner'),
            // TextInput::make('created_by'),
            // TextInput::make('updated_by'),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('abbreviation'),
            static::CustomTextColumn('email'),
            static::CustomTextColumn('phone'),
            static::CustomTextColumn('university'),
            static::CustomTextColumn('ministere'),
            static::CustomTextColumn('currentYear.designation')->label('Year'),
        ];
    }

    public static function getExtraFilters(): array
    {
        return [
            SelectFilter::make('current_year_id')
                ->label('Year')
                ->options(fn () => Year::pluck('designation', 'id'))
                ->default(fn () => Year::where('designation', now()->year)->value('id')),
        ];
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
            'index' => Pages\ListCoordinates::route('/'),
            'create' => Pages\CreateCoordinate::route('/create'),
            'edit' => Pages\EditCoordinate::route('/{record}/edit'),
        ];
    }
}
