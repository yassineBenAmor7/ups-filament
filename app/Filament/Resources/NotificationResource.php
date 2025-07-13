<?php

namespace App\Filament\Resources;

use App\Models\Notification;
use App\Filament\Resources\BaseResource;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Filament\Resources\NotificationResource\Pages;
use Filament\Tables\Table;

class NotificationResource extends BaseResource
{
    protected static ?string $model = Notification::class;
    protected static ?string $navigationIcon = 'heroicon-o-bell';
    protected static array $extraPermissions = [];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make()->schema([
                Select::make('user_id')->relationship('user', 'id')->nullable(),
                TextInput::make('sender_id')->nullable(),
                Textarea::make('text')->nullable(),
                TextInput::make('image')->nullable(),
                TextInput::make('link')->nullable(),
                TextInput::make('seen')->nullable(),
                TextInput::make('is_notif_sent')->nullable(),
                TextInput::make('created_by')->nullable(),
                TextInput::make('updated_by')->nullable(),
            ]),
        ]);
    }

    public static function getExtraColumns(): array
    {
        return [
            static::CustomTextColumn('id'),
            static::CustomTextColumn('user_id'),
            static::CustomTextColumn('sender_id'),
            static::CustomTextColumn('text'),
            static::CustomTextColumn('image'),
            static::CustomTextColumn('link'),
            static::CustomTextColumn('seen'),
            static::CustomTextColumn('is_notif_sent'),
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
            'index' => Pages\ListNotifications::route('/'),
            'create' => Pages\CreateNotification::route('/create'),
            'edit' => Pages\EditNotification::route('/{record}/edit'),
        ];
    }
}
