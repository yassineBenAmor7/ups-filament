<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvEducationResource\Pages;
use App\Models\CvEducation;
use App\Models\User;
use App\Models\CvEducationType;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class CvEducationResource extends BaseResource
{
    protected static ?string $model = CvEducation::class;

    protected static ?string $navigationIcon ='heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('user_id')
                ->label('Utilisateur')
                ->relationship('user', 'name'),

            Select::make('cv_education_type_id')
                ->label('Type de formation')
                ->relationship('type', 'designation_fr'),

            DatePicker::make('start')->label('Début'),
            DatePicker::make('end')->label('Fin'),

            Toggle::make('is_current')->label('En cours'),
            TextInput::make('place')->label('Lieu'),
            Textarea::make('description')->label('Description'),
            Toggle::make('publier')->label('Publié'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('Utilisateur'),
                TextColumn::make('type.designation_fr')->label('Type'),
                TextColumn::make('place')->label('Lieu'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCvEducation::route('/'),
            'create' => Pages\CreateCvEducation::route('/create'),
            'edit' => Pages\EditCvEducation::route('/ {record}/edit'),
        ];
    }
}
