<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupTdResource\Pages;
use App\Filament\Resources\GroupTdResource\RelationManagers;
use App\Models\GroupTd;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GroupTdResource extends Resource
{
    protected static ?string $model = GroupTd::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            TextColumn::make('designation_fr')->searchable(),
            TextColumn::make('designation_en'),
            TextColumn::make('designation_ar'),
            TextColumn::make('Group.designation_fr')->label('Groupe'),
        ])
        ->filters([])
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
            //
        ];
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
