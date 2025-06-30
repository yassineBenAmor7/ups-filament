<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupTpResource\Pages;
use App\Models\GroupTp;
use Filament\Forms\Components\{TextInput, Toggle, Select, Grid};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\{TextColumn, IconColumn};
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;


class GroupTpResource extends BaseResource
{
    protected static ?string $model = GroupTp::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

   public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(2)->schema([
                Select::make('group_td_id')
                    ->label('Groupe Td')
                    ->relationship('GroupTd', 'designation_fr')
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
                TextColumn::make('groupTd.designation_fr')->label('Groupe'),
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
            'index' => Pages\ListGroupTps::route('/'),
            'create' => Pages\CreateGroupTp::route('/create'),
            'edit' => Pages\EditGroupTp::route('/{record}/edit'),
        ];
    }
}
