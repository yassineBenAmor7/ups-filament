<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupResource\Pages;
use App\Models\Group;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\{TextInput, Toggle, Select, Grid};
use Filament\Tables\Columns\{TextColumn, IconColumn};
use Filament\Tables\Actions\{EditAction, DeleteBulkAction, BulkActionGroup};
use Filament\Tables\Table;

class GroupResource extends BaseResource
{

    protected static ?string $model = Group::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(2)->schema([
                Select::make('sector_id')
                    ->label('Secteur')
                    ->relationship('sector', 'designation_fr')
                    ->searchable()
                    ->required(),
                TextInput::make('designation_fr')->label('Désignation (FR)')->required()->maxLength(100),
                TextInput::make('designation_en')->label('Désignation (EN)')->maxLength(100),
                TextInput::make('designation_ar')->label('Désignation (AR)')->maxLength(100),
                Toggle::make('publier')->label('Publié')->default(true),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sector.designation_fr')->label('Secteur'),
                TextColumn::make('designation_fr')->label('Désignation (FR)')->searchable(),
                IconColumn::make('publier')->boolean()->label('Publié'),
            ])
            ->actions([EditAction::make()])
            ->bulkActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGroups::route('/'),
            'create' => Pages\CreateGroup::route('/create'),
            'edit' => Pages\EditGroup::route('/{record}/edit'),
        ];
    }
}