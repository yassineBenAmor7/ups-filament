<?php

namespace App\Filament\Resources;

use App\Models\Message;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\MessageResource\Pages;

class MessageResource extends BaseResource
{
    protected static ?string $model = Message::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left';
    protected static ?string $navigationLabel = 'Messages';
    protected static ?string $pluralModelLabel = 'Messages';
    protected static ?string $modelLabel = 'Message';

    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make('Message Details')->schema([
                Textarea::make('content')->nullable(),
                TextInput::make('seen')->numeric()->nullable(),
                Textarea::make('files')->nullable(),
                Select::make('user_id')->relationship('user', 'name')->nullable(),
                Select::make('chat_id')->relationship('chat', 'id')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('content'),
            static::CustomTextColumn('seen'),
            static::CustomTextColumn('files'),
            static::CustomTextColumn('user.name', 'User'),
            static::CustomTextColumn('chat.id', 'Chat'),
            static::CustomTextColumn('created_by'),
            static::CustomTextColumn('updated_by'),
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
            'index' => Pages\ListMessages::route('/'),
            'create' => Pages\CreateMessage::route('/create'),
            'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}
