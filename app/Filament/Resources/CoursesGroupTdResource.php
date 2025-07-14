<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoursesGroupTdResource\Pages;
use App\Models\CoursesGroupTd;
use App\Models\GroupTd;
use App\Models\Course;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class CoursesGroupTdResource extends BaseResource
{
    protected static ?string $model = CoursesGroupTd::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('course_id')
                ->label('Cours')
                ->relationship('course', 'designation_fr'),

            Select::make('group_td_id')
                ->label('Groupe TD')
                ->relationship('groupTd', 'designation'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('course.designation_fr')->label('Cours'),
                TextColumn::make('groupTd.designation')->label('Groupe TD'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCoursesGroupTds::route('/'),
            'create' => Pages\CreateCoursesGroupTd::route('/create'),
            'edit' => Pages\EditCoursesGroupTd::route('/{record}/edit'),
        ];
    }
}
