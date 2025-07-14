<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
        if (app()->environment('local')) {
            $this->cleanLivewireTempFiles();
        }
    }

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
