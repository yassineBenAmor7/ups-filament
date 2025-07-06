<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TimetablesResource\Pages;
use App\Filament\Resources\TimetablesResource\RelationManagers;
use App\Models\Timetables;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class TimetablesResource extends BaseResource
{
    protected static ?string $model = Timetables::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('type')->nullable(),
                Textarea::make('file')->nullable(),
                Textarea::make('note')->nullable(),
                TextInput::make('department_id')->numeric()->nullable(),
                TextInput::make('teacher_cin')->nullable(),
                TextInput::make('sector_id')->numeric()->nullable(),
                TextInput::make('group_id')->numeric()->nullable(),
                TextInput::make('group_td_id')->numeric()->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                TextInput::make('publier')->numeric()->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('type'),
            static::CustomTextColumn('file'),
            static::CustomTextColumn('note'),
            static::CustomTextColumn('department_id'),
            static::CustomTextColumn('teacher_cin'),
            static::CustomTextColumn('sector_id'),
            static::CustomTextColumn('group_id'),
            static::CustomTextColumn('group_td_id'),
            static::CustomTextColumn('created_at'),
            static::CustomTextColumn('updated_at'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
            static::CustomTextColumn('publier'),
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
            'index' => Pages\ListTimetables::route('/'),
            'create' => Pages\CreateTimetables::route('/create'),
            'edit' => Pages\EditTimetables::route('/{record}/edit'),
        ];
    }
}
