<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoctoralStudentResource\Pages;
use App\Filament\Resources\DoctoralStudentResource\RelationManagers;
use App\Models\DoctoralStudent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DoctoralStudentResource extends BaseResource
{
    protected static ?string $model = DoctoralStudent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            'index' => Pages\ListDoctoralStudents::route('/'),
            'create' => Pages\CreateDoctoralStudent::route('/create'),
            'edit' => Pages\EditDoctoralStudent::route('/{record}/edit'),
        ];
    }
}
