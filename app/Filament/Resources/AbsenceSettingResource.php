<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbsenceSettingResource\Pages;
use App\Filament\Resources\AbsenceSettingResource\RelationManagers;
use App\Models\AbsenceSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsenceSettingResource extends BaseResource
{
    protected static ?string $model = AbsenceSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

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
            'index' => Pages\ListAbsenceSettings::route('/'),
            'create' => Pages\CreateAbsenceSetting::route('/create'),
            'edit' => Pages\EditAbsenceSetting::route('/{record}/edit'),
        ];
    }
}
