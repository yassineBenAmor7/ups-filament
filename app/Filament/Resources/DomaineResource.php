<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DomaineResource\Pages;
use App\Models\Domaine;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Table;

class DomaineResource extends BaseResource
{
    protected static ?string $model = Domaine::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_fr')
                ->label('Désignation (FR)')
                ->required()
                ->maxLength(100),
            TextInput::make('designation_en')
                ->label('Désignation (EN)')
                ->maxLength(100),
            TextInput::make('designation_ar')
                ->label('Désignation (AR)')
                ->maxLength(100),
            Toggle::make('publier')
                ->label('Publié')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation_fr')->label('Désignation (FR)')->searchable(),
                IconColumn::make('publier')->boolean()->label('Publié'),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDomaines::route('/'),
            'create' => Pages\CreateDomaine::route('/create'),
            'edit' => Pages\EditDomaine::route('/{record}/edit'),
        ];
    }
}
