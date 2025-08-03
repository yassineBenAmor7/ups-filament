<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Personal;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\BelongsToSelect;
use App\Filament\Resources\PersonalResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PersonalResource\RelationManagers;

class PersonalResource extends BaseResource
{
    protected static ?string $model = Personal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('affichage_in_front')->numeric(),
                TextInput::make('grade_name'),
                Select::make('grade_id')->relationship('grade', 'designation_fr')->nullable(),
                TextInput::make('service_fr'),
                TextInput::make('service_en'),
                TextInput::make('service_ar'),
                TextInput::make('fonction_fr'),
                TextInput::make('fonction_en'),
                TextInput::make('fonction_ar'),
                // TextInput::make('created_by'),
                // TextInput::make('updated_by'),
                // DatePicker::make('created_at'),
                // DatePicker::make('updated_at'),
                TextInput::make('cin'),
                TextInput::make('slug'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('grade_name'),
                TextColumn::make('service_fr'),
                TextColumn::make('fonction_fr'),
                TextColumn::make('affichage_in_front'),
                TextColumn::make('cin'),
                // TextColumn::make('created_at')->dateTime(),

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
            'index' => Pages\ListPersonals::route('/'),
            'create' => Pages\CreatePersonal::route('/create'),
            'edit' => Pages\EditPersonal::route('/{record}/edit'),
        ];
    }
}
