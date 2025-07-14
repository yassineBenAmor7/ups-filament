<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Models\Course;
use App\Models\Subject;
use App\Models\User;
use App\Models\GroupTd;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MultiSelect;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class CourseResource extends BaseResource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->label('Désignation (FR)')->maxLength(255),
            TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(255),
            TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(255),

            RichEditor::make('description_fr')->label('Description (FR)'),
            RichEditor::make('description_en')->label('Description (EN)'),
            RichEditor::make('description_ar')->label('Description (AR)'),

            Select::make('subject_id')
                ->label('Matière')
                ->relationship('subject', 'designation_fr'),

            Select::make('teacher_cin')
                ->label('Enseignant')
                ->relationship('user', 'name'),

            Select::make('groups')
                ->label('Groupes TD')
                ->relationship('groups', 'designation'),

            Toggle::make('publier')->label('Publié'),
            Toggle::make('permission_comment')->label('Commentaires autorisés'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->label('Cours'),
                TextColumn::make('subject.designation_fr')->label('Matière'),
                TextColumn::make('user.name')->label('Enseignant'),
                IconColumn::make('publier')->label('Publié')->boolean(),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tu peux ajouter un RelationManager pour `chapters` si besoin
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
