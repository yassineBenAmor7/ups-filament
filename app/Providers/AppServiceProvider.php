<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use App\Observers\GlobalLogObserver;
use Carbon\Carbon;
use App\Filament\Facades\Designer;
use LaraZeus\Bolt\Filament\Resources\FormResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         FormResource::getBoltFormSchemaUsing(fn(): array => Designer::getMainFormSchema());
        
     
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // Nettoyage des fichiers Livewire temporaires en local
        if (App::environment('local')) {
            $this->cleanLivewireTempFiles();
        }

        // Observation automatique de tous les modèles sauf Log
        foreach ($this->getObservableModels() as $model) {
            $model::observe(GlobalLogObserver::class);
        }
      FormResource::navigationSort(1);
     
FormResource::navigationGroup('University');

    }

    /**
     * Récupère dynamiquement tous les modèles de app/Models sauf Log
     */
    protected function getObservableModels(): array
    {
        $modelPath = app_path('Models');
        $files = scandir($modelPath);

        return collect($files)
            ->filter(fn($file) => str_ends_with($file, '.php'))
            ->map(fn($file) => '\App\Models\\' . str_replace('.php', '', $file))
            ->filter(fn($class) =>
                class_exists($class) &&
                is_subclass_of($class, Model::class) &&
                $class !== \App\Models\Log::class
            )
            ->values()
            ->toArray();
    }

    /**
     * Supprime les fichiers Livewire temporaires vieux de plus de 24h
     */
    protected function cleanLivewireTempFiles()
    {
        $directory = storage_path('app/private/livewire-tmp');

        if (!File::exists($directory)) return;

        $files = File::allFiles($directory);
        $now = now();

        foreach ($files as $file) {
            $lastModified = Carbon::createFromTimestamp($file->getMTime());

            if ($lastModified->diffInMinutes($now) > 1440) {
                File::delete($file->getPathname());
            }
        }
    }
}
