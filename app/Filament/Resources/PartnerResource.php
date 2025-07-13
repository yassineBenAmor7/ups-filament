<?php

namespace App\Filament\Resources;

use App\Models\Partner;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Table;
use App\Filament\Resources\PartnerResource\Pages;

class PartnerResource extends BaseResource
{
    protected static ?string $model = Partner::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->nullable(),
            TextInput::make('designation_en')->nullable(),
            TextInput::make('designation_ar')->nullable(),
            TextInput::make('logo')->nullable(),
            RichEditor::make('description_fr')->nullable(),
            RichEditor::make('description_en')->nullable(),
            RichEditor::make('description_ar')->nullable(),
            TextInput::make('internationalisation')->nullable(),
            TextInput::make('type')->nullable(),
            TextInput::make('link')->nullable(),
            TextInput::make('partner_categorie_id')->nullable(),
            TextInput::make('publier')->nullable(),
            TextInput::make('created_by')->nullable(),
            TextInput::make('updated_by')->nullable(),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('designation_fr'),
            static::CustomTextColumn('designation_en'),
            static::CustomTextColumn('designation_ar'),
            static::CustomTextColumn('logo'),
            static::CustomTextColumn('internationalisation'),
            static::CustomTextColumn('type'),
            static::CustomTextColumn('link'),
            static::CustomTextColumn('partner_categorie_id'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
