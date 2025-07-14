<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbsenceStudentResource\Pages;
use App\Filament\Resources\AbsenceStudentResource\RelationManagers;
use App\Models\AbsenceStudent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsenceStudentResource extends BaseResource
{
    protected static ?string $model = AbsenceStudent::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListAbsenceStudents::route('/'),
            'create' => Pages\CreateAbsenceStudent::route('/create'),
            'edit' => Pages\EditAbsenceStudent::route('/{record}/edit'),
        ];
    }
}
