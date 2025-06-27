<?php

namespace App\Filament\Plugins;

use Datlechin\FilamentMenuBuilder\Models\Menu;
use Datlechin\FilamentMenuBuilder\Resources\MenuResource\Pages\EditMenu;
use Filament\Facades\Filament;
use Filament\Navigation\MenuItem;
use Filament\Notifications\Notification;
use Filament\Actions;
use Illuminate\Support\Str;

class EditMenuAction extends EditMenu
{

    protected function getHeaderActions(): array
    {






        return [
            Actions\DeleteAction::make(),
            $this->getLocationAction(),
            Actions\Action::make('generate_menu_items')
                ->label('Generate the menu items')
                ->icon('heroicon-o-cog')
                ->color('primary')
                ->action(function () {
                    $this->addListItemRescorce();


                })


        ];
    }
   protected function addListItemRescorce()
    {
        $menu= $this->record;

        $resources = Filament::getResources();

        $labels = [];

        $resourceName = collect($resources)->map(function ($resource) {
            $url = $resource::getUrl();

            $lastSegment = Str::afterLast($url, '/');
            return $lastSegment !== 'menus' ? $lastSegment : null;
        })->filter()
            ->values()->toArray();

        $menuItems = \Datlechin\FilamentMenuBuilder\Models\MenuItem::select('menu_items.*')
            ->where('menu_items.url', 'like', '/' . $menu->name . '%')
            ->pluck('menu_items.url');
        $results = collect($menuItems)->map(function ($url)use($menu) {
            return Str::after($url, '/'.$menu->name.'/');
        })->toArray();

        $itemDff=array_diff($resourceName, $results);



        if (!empty($itemDff)) {
            foreach ($itemDff as $itemName) {
                $menu->menuItems()->create([
                    'title' => $itemName,
                    'url' => '/' . $menu->name . '/' . $itemName,
                    'is_mega' => false,
                    'is_publier' => true,
                    'order' => $menu->menuItems->max('order') + 1,
                ]);
            }

            Notification::make()
                ->title('All resources item  added with success')
                ->success()
                ->send();

        } else {
            Notification::make()
                ->title('All resources have already been added.')
                ->info()
                ->send();
        }

    }
}
