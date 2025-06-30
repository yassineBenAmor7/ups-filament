<?php

namespace App\Filament\Plugins;

use Datlechin\FilamentMenuBuilder\Concerns\HasLocationAction;
use Datlechin\FilamentMenuBuilder\Resources\MenuResource as BaseMenuResource;
use Filament\Actions;
use Filament\Notifications\Notification;

class MenuResource extends BaseMenuResource
{
    use HasLocationAction;

    protected static ?string $navigationGroup = 'Navigation';

    public static function getPages(): array
    {
        return [
            'index' => \Datlechin\FilamentMenuBuilder\Resources\MenuResource\Pages\ListMenus::route('/'),
            'edit' => EditMenuAction::route('/{record}/edit'),

        ];
    }
}
