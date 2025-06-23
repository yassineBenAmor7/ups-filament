<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use App\Models\StudentsPredefinedList;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StudentsPredefinedListResource\Pages;
use App\Filament\Resources\StudentsPredefinedListResource\RelationManagers;

class StudentsPredefinedListResource extends Resource
{
    protected static ?string $model = StudentsPredefinedList::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('numero_inscription'),
                TextInput::make('cin'),
                Select::make('year_id')->nullable(),
                Select::make('groupe_tp_id')->nullable(),
                Select::make('groupe_td_id')->nullable(),
                Select::make('groupe_id')->nullable(),
                Select::make('sector_id')->nullable(),
                TextInput::make('nom'),
                TextInput::make('prenom'),
                TextInput::make('nom_ar'),
                TextInput::make('prenom_ar'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
                DatePicker::make('created_at'),
                DatePicker::make('updated_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('numero_inscription'),
                TextColumn::make('cin'),
                TextColumn::make('nom'),
                TextColumn::make('prenom'),
                TextColumn::make('nom_ar'),
                TextColumn::make('prenom_ar'),
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
            'index' => Pages\ListStudentsPredefinedLists::route('/'),
            'create' => Pages\CreateStudentsPredefinedList::route('/create'),
            'edit' => Pages\EditStudentsPredefinedList::route('/{record}/edit'),
        ];
    }
}
