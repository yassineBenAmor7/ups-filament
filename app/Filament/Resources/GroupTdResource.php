<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupTdResource\Pages;
use App\Models\GroupTd;
use Filament\Forms\Components\{TextInput, Toggle, Select, Grid};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\{TextColumn, IconColumn};
use Filament\Tables\Actions\{EditAction, DeleteBulkAction, BulkActionGroup};
use Filament\Tables\Table;

class GroupTdResource extends BaseResource
{
    protected static ?string $model = GroupTd::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    public static function form(Form $form): Form
{
    return $form->schema([

        TextInput::make('designation_fr')->required(),
        TextInput::make('designation_en'),
        TextInput::make('designation_ar'),

        Select::make('group_id')
            ->relationship('Group', 'designation_fr')
            ->required(),
       ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('group.designation_fr')->label('Groupe'),
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
            'index' => Pages\ListGroupTds::route('/'),
            'create' => Pages\CreateGroupTd::route('/create'),
            'edit' => Pages\EditGroupTd::route('/{record}/edit'),
        ];
    }
}
