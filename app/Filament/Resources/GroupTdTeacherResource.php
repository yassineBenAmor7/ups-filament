<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupTdTeacherResource\Pages;
use App\Filament\Resources\GroupTdTeacherResource\RelationManagers;
use App\Models\GroupTdTeacher;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GroupTdTeacherResource extends BaseResource
{
    protected static ?string $model = GroupTdTeacher::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        Select::make('group_td_id')
            ->relationship('GroupTd', 'designation_fr')
            ->required(),
        Select::make('teacher_id')
            ->relationship('teacher', 'nom')
            ->required(),
    ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('GroupTd.designation_fr')->label('TD'),
            TextColumn::make('teacher.nom')->label('Enseignant'),
        ])
        ->filters([])
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGroupTdTeachers::route('/'),
            'create' => Pages\CreateGroupTdTeacher::route('/create'),
            'edit' => Pages\EditGroupTdTeacher::route('/{record}/edit'),
        ];
    }
}
