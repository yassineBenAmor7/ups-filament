<?php

namespace App\Filament\Resources;

use App\Models\NewsDepartment;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NewsDepartmentResource\Pages;
use Filament\Tables\Table;

class NewsDepartmentResource extends BaseResource
{
    protected static ?string $model = NewsDepartment::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('news_id')->relationship('news', 'id')->nullable(),
                Select::make('department_id')->relationship('department', 'id')->nullable(),
                // TextInput::make('created_by')->nullable(),
                // TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('news_id'),
            static::CustomTextColumn('department_id'),
            // static::CustomTextColumn('created_by'),
            // static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListNewsDepartments::route('/'),
            'create' => Pages\CreateNewsDepartment::route('/create'),
            'edit' => Pages\EditNewsDepartment::route('/{record}/edit'),
        ];
    }
}
