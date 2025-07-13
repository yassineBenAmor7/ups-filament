<?php

namespace App\Filament\Resources;

use App\Models\Note;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NoteResource\Pages;
use Filament\Tables\Table;

class NoteResource extends BaseResource
{
    protected static ?string $model = Note::class;
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static array $extraPermissions = ['publish'];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                TextInput::make('student_cin')->nullable(),
                TextInput::make('student_name')->nullable(),
                TextInput::make('subject')->nullable(),
                TextInput::make('note')->nullable(),
                TextInput::make('semestre')->nullable(),
                Select::make('year_id')->relationship('year', 'id')->nullable(),
                Select::make('subject_id')->relationship('subject', 'id')->nullable(),
                TextInput::make('publier')->nullable(),
                TextInput::make('reclamation')->nullable(),
                Textarea::make('desc_reclamation')->nullable(),
                TextInput::make('teacher_cin')->nullable(),
                TextInput::make('teacher_name')->nullable(),
                Select::make('group_td_id')->relationship('groupTd', 'id')->nullable(),
                TextInput::make('group_td_designation')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('student_cin'),
            static::CustomTextColumn('student_name'),
            static::CustomTextColumn('subject'),
            static::CustomTextColumn('note'),
            static::CustomTextColumn('semestre'),
            static::CustomTextColumn('year_id'),
            static::CustomTextColumn('subject_id'),
            static::CustomTextColumn('publier'),
            static::CustomTextColumn('reclamation'),
            static::CustomTextColumn('desc_reclamation'),
            static::CustomTextColumn('teacher_cin'),
            static::CustomTextColumn('teacher_name'),
            static::CustomTextColumn('group_td_id'),
            static::CustomTextColumn('group_td_designation'),
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
            'index' => Pages\ListNotes::route('/'),
            'create' => Pages\CreateNote::route('/create'),
            'edit' => Pages\EditNote::route('/{record}/edit'),
        ];
    }
}
