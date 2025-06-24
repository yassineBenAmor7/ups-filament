<?php

namespace App\Filament\Resources\users\students;

use Filament\Forms;
use Filament\Tables;
use App\Models\users\students\Student;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\users\students\StudentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\users\students\StudentResource\RelationManagers;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('annee_bac'),
                TextInput::make('section_bac'),
                TextInput::make('session_bac'),
                TextInput::make('mention_bac'),
                TextInput::make('moyenne_bac')->numeric(),
                Textarea::make('pays_bac'),
                Textarea::make('mon_pere'),
                Textarea::make('premon_pere'),
                Textarea::make('prefession_pere'),
                Textarea::make('etablissement_prof_pere'),
                Textarea::make('nom_mere'),
                Textarea::make('prenom_mere'),
                Textarea::make('etablissement_prof_mere'),
                Textarea::make('nom_jeune_fille'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
                DatePicker::make('created_at'),
                DatePicker::make('updated_at'),
                DatePicker::make('deleted_at'),
                TextInput::make('diploma'),
                TextInput::make('slug'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('annee_bac'),
                TextColumn::make('section_bac'),
                TextColumn::make('mention_bac'),
                TextColumn::make('moyenne_bac'),
                TextColumn::make('diploma'),
                TextColumn::make('slug'),
                TextColumn::make('created_at')->dateTime(),

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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
