<?php 
namespace App\Filament\Plugins;
use LaraZeus\Bolt\BoltPlugin;
use Filament\Panel;
use App\Filament\Resources\FormResource;
class CustomBoltPlugin extends BoltPlugin
{
    public function register(Panel $panel): void
    {
          
        $panel
            ->resources([
                FormResource::class, 
                \LaraZeus\Bolt\Filament\Resources\CollectionResource::class,
                \LaraZeus\Bolt\Filament\Resources\CategoryResource::class,
            ]);
    }
     public static function make(): static
    {
       
        return new static();
    }
}