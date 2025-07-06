<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntreprisesResource\Pages;
use App\Models\Entreprises;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class EntreprisesResource extends BaseResource
{
    protected static ?string $model = Entreprises::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation')->nullable(),
                TextInput::make('logo')->nullable(),
                TextInput::make('phone')->nullable(),
                TextInput::make('email')->nullable(),
                TextInput::make('address')->nullable(),
                TextInput::make('fax')->nullable(),
                Textarea::make('description')->nullable(),
                Textarea::make('location')->nullable(),
                TextInput::make('responsable_name')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
                TextInput::make('website')->nullable(),
                TextInput::make('domaine_id')->numeric()->nullable(),
                TextInput::make('slug')->nullable(),
                TextInput::make('validation')->numeric()->nullable(),
            ]);
    }
    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('designation'),
            static::CustomTextColumn('logo'),
            static::CustomTextColumn('phone'),
            static::CustomTextColumn('email'),
            static::CustomTextColumn('address'),
            static::CustomTextColumn('fax'),
            static::CustomTextColumn('responsable_name'),
            static::CustomTextColumn('website'),
            static::CustomTextColumn('domaine_id'),
            static::CustomTextColumn('slug'),
            static::CustomTextColumn('validation'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('publier'),
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
            'index' => Pages\ListEntreprises::route('/'),
            'create' => Pages\CreateEntreprises::route('/create'),
            'edit' => Pages\EditEntreprises::route('/{record}/edit'),
        ];
    }
}
