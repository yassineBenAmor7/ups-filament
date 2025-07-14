<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvSkillResource\Pages;
use App\Models\CvSkill;
use App\Models\CvSkillCategory;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class CvSkillResource extends BaseResource
{
    protected static ?string $model = CvSkill::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')->label('Désignation (FR)'),
            TextInput::make('designation_en')->label('Désignation (EN)'),
            TextInput::make('designation_ar')->label('Désignation (AR)'),

            Select::make('cv_skill_category_id')
                ->label('Catégorie')
                ->relationship('category', 'designation_fr'),

            Toggle::make('publier')->label('Publié'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->label('Compétence'),
                TextColumn::make('category.designation_fr')->label('Catégorie'),
                IconColumn::make('publier')->boolean()->label('Publié'),
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
            'index' => Pages\ListCvSkills::route('/'),
            'create' => Pages\CreateCvSkill::route('/create'),
            'edit' => Pages\EditCvSkill::route('/{record}/edit'),
        ];
    }
}
