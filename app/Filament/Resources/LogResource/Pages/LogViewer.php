<?php

namespace App\Filament\Resources\LogResource\Pages;

use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Log;

class LogViewer extends Page
{
    protected static string $resource = \App\Filament\Resources\LogResource::class;
        protected static string $view = 'filament.resources.log-resource.pages.Listlogs';


    public $logContent;

    public function mount()
    {
         $logPath = storage_path('logs/laravel.log');

        if (file_exists($logPath)) {
            $this->logContent = file_get_contents($logPath);
        } else {
            $this->logContent = 'Aucun log à afficher.';
        }
    }

    protected function getViewData(): array
    {
        Log::alert('test');
        return [
            'logContent' => $this->logContent,
        ];
    }
}