<?php

namespace App\Filament\Resources;

use App\Models\NoteClaim;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NoteClaimResource\Pages;
use Filament\Tables\Table;

class NoteClaimResource extends BaseResource
{
    protected static ?string $model = NoteClaim::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';
    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('user_id')->relationship('user', 'id')->nullable(),
                Select::make('note_id')->relationship('note', 'id')->nullable(),
                Textarea::make('description')->nullable(),
                TextInput::make('etat')->nullable(),
                // TextInput::make('created_by')->nullable(),
                // TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('note_id'),
            static::CustomTextColumn('description'),
            static::CustomTextColumn('etat'),
            // static::CustomTextColumn('created_by'),
            // static::CustomTextColumn('updated_by'),
        ];
    }

    public static function getExtraFilters(): array
    {
        return [];
    }

    public static function table(Table $table): Table
    {
        return parent::table($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNoteClaims::route('/'),
            'create' => Pages\CreateNoteClaim::route('/create'),
            'edit' => Pages\EditNoteClaim::route('/{record}/edit'),
        ];
    }
}
