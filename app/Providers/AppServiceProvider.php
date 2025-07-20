<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use App\Observers\GlobalLogObserver;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    // Configuration existante
    if (App::environment('local')) {
        $this->cleanLivewireTempFiles();
    }

    foreach ($this->getObservableModels() as $model) {
        $model::observe(GlobalLogObserver::class);
    }

    // Ajoutez cette configuration pour Filament Edit Profile
    $this->configureFilamentEditProfile();
}

protected function configureFilamentEditProfile(): void
{
    if (!class_exists(\Joaopaulolndev\FilamentEditProfile\FilamentEditProfile::class)) {
        return;
    }

    // Configuration spécifique pour la v1.0
    config([
        'filament-edit-profile.avatar' => [
            'enabled' => true,
            'disk' => 'public',
            'directory' => 'users/avatars',
            'rules' => [
                'image',
                'mimes:jpeg,png,jpg,gif,webp',
                'max:2048',
                'dimensions:min_width=100,min_height=100',
            ],
            'visibility' => 'public',
            'column' => 'avatar_url',
        ],
    ]);
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
