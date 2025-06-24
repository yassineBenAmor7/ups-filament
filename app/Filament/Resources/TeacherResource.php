<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Teacher;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\BelongsToSelect;
use App\Filament\Resources\TeacherResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeacherResource\RelationManagers;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('department_id')->nullable(),
                TextInput::make('cin'),
                TextInput::make('nom'),
                TextInput::make('name'),
                TextInput::make('nb_max_encadement')->numeric(),
                TextInput::make('nb_surveillance'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
                DatePicker::make('created_at'),
                DatePicker::make('updated_at'),
                TextInput::make('affichage_in_front')->numeric(),
                TextInput::make('slug'),
                TextInput::make('indentifiant_unique'),
                TextInput::make('poste'),
                TextInput::make('statut_ar'),
                TextInput::make('statut_en'),
                TextInput::make('statut_fr'),
                TextInput::make('specialite_ar'),
                TextInput::make('specialite_en'),
                TextInput::make('specialite_fr'),
                Select::make('grade_id')
                    ->label('Grade')
                    ->relationship('grade', 'designation_fr')
                    ->nullable()
                    ->searchable(),
                TextInput::make('grade_name'),
                TextInput::make('email'),
                TextInput::make('nom_ar'),
                TextInput::make('prenom'),
                TextInput::make('prenom_ar'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('cin'),
                TextColumn::make('nb_max_encadement'),
                TextColumn::make('poste'),
                TextColumn::make('grade_name'),
                TextColumn::make('created_at')->dateTime(),
                TextColumn::make('cin')->label('CIN'),
                TextColumn::make('nom')->label('Nom'),
                TextColumn::make('prenom')->label('Prénom'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('grade.designation_fr')->label('Grade'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}
