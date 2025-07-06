<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Chats;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ChatsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Filament\Resources\BaseResource;


class ChatsResource extends BaseResource
{
    protected static ?string $model = Chats::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_id')->numeric()->nullable(),
                TextInput::make('designation')->nullable(),
                TextInput::make('etat')->numeric()->nullable(),
                DatePicker::make('created_at')->nullable(),
            ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('designation'),
            static::CustomTextColumn('etat'),
            static::CustomTextColumn('created_at')->dateTime(),
        ];
    }

    public static function table(Table $table): Table
    {
        return parent::table($table);
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
            'index' => Pages\ListChats::route('/'),
            'create' => Pages\CreateChats::route('/create'),
            'edit' => Pages\EditChats::route('/{record}/edit'),
        ];
    }
}
