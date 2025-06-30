<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartmentResource\Pages;
use App\Models\Department;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Table;

class DepartmentResource extends BaseResource
{

    protected static ?string $model = Department::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->required()->maxLength(100),
            TextInput::make('designation_en')->maxLength(100),
            TextInput::make('designation_ar')->maxLength(100),
            TextInput::make('cover')->label('Couverture'),
            RichEditor::make('description_fr')->label('Description (FR)'),
            RichEditor::make('description_en')->label('Description (EN)'),
            RichEditor::make('description_ar')->label('Description (AR)'),
            Toggle::make('publier')->label('Publié')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->searchable(),
                IconColumn::make('publier')->boolean()->label('Publié'),
            ])
            ->filters([
                // Ajoutez vos filtres ici si nécessaire
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
            // Ajoutez les RelationManagers ici si nécessaire
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
        ];
    }
}
