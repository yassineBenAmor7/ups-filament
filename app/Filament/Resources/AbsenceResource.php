<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbsenceResource\Pages;
use App\Models\Absence;
use Filament\Forms\Form;
use Filament\Resources\Ressource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\{TextInput, Select, Toggle, DatePicker, Textarea, Grid};
use Filament\Tables\Columns\{TextColumn, IconColumn};

class AbsenceResource extends BaseResource
{
    protected static ?string $model = Absence::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    protected static ?string $navigationLabel = 'Absences';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(3)->schema([
                Select::make('student_id')->label('Étudiant'),
                Select::make('teacher_id')->label('Enseignant'),
                Select::make('group_td_id')->label('TD'),
                Select::make('subject_id')->label('Matière'),
                Select::make('year_id')->label('Année'),
                Select::make('period_id')->label('Séance'),

                TextInput::make('year_designation')->label('Année scolaire')->maxLength(255),
                TextInput::make('subject_designation')->label('Nom matière')->maxLength(255),
                TextInput::make('group_td_designation')->label('TD désignation')->maxLength(255),
                TextInput::make('teacher_name')->label('Nom enseignant')->maxLength(255),
                TextInput::make('teacher_cin')->label('CIN enseignant')->maxLength(255),
                TextInput::make('student_name')->label('Nom étudiant')->maxLength(255),
                TextInput::make('student_cin')->label('CIN étudiant')->maxLength(255),

                TextInput::make('semestre')->label('Semestre')->maxLength(255),
                DatePicker::make('date')->label('Date'),
                Toggle::make('status')->label('Présent'),
                Toggle::make('publier')->label('Publié'),
                Toggle::make('reclamation')->label('Réclamé'),
                TextInput::make('slug')->label('Slug')->maxLength(255),
            ]),

           
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('student_name')->label('Étudiant'),
            TextColumn::make('teacher_name')->label('Enseignant'),
            TextColumn::make('subject_designation')->label('Matière'),
            TextColumn::make('group_td_designation')->label('TD'),
            TextColumn::make('date')->label('Date'),
            IconColumn::make('status')->label('Présent')->boolean(),
            IconColumn::make('publier')->label('Publié')->boolean(),
            IconColumn::make('reclamation')->label('Réclamation')->boolean(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbsences::route('/'),
            'create' => Pages\CreateAbsence::route('/create'),
            'edit' => Pages\EditAbsence::route('/{record}/edit'),
        ];
    }
}
