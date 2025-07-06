<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubjectTeachersResource\Pages;
use App\Models\SubjectTeachers;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\BaseResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;

class SubjectTeachersResource extends BaseResource
{
    protected static ?string $model = SubjectTeachers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('subject_id')->numeric()->nullable(),
                TextInput::make('teacher_id')->numeric()->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
                DatePicker::make('created_at')->nullable(),
                DatePicker::make('updated_at')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('subject_id'),
            static::CustomTextColumn('teacher_id'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListSubjectTeachers::route('/'),
            'create' => Pages\CreateSubjectTeachers::route('/create'),
            'edit' => Pages\EditSubjectTeachers::route('/{record}/edit'),
        ];
    }
}
