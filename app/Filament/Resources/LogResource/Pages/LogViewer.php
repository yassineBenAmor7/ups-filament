<?php
namespace App\Filament\Resources\LogResource\Pages;

use Filament\Resources\Pages\Page;

class LogViewer extends Page
{
    protected static string $resource = \App\Filament\Resources\LogResource::class;
    protected static string $view = 'filament.resources.log-resource.pages.Listlogs';
    public array $parsedLogs = [];

    public function mount()
    {
        $logPath = storage_path('logs/laravel.log');

        if (file_exists($logPath)) {
            $content = file_get_contents($logPath);
            $this->parsedLogs = $this->parseLogContent($content);
        } else {
            $this->parsedLogs = [['content' => 'Aucun log à afficher.', 'type' => 'info']];
        }
    }

    protected function parseLogContent(string $content): array
    {
        $lines = explode("\n", $content);
        $parsedLines = [];

        foreach ($lines as $line) {
            if (empty(trim($line))) continue;

            $type = 'info';
            if (str_contains($line, '.ALERT:')) {
                $type = 'alert';
            } elseif (str_contains($line, '.ERROR:')) {
                $type = 'error';
            }

            $parsedLines[] = [
                'content' => $line,
                'type' => $type
            ];
        }

        return $parsedLines;
    }

    protected function getViewData(): array
    {
        return [
            'parsedLogs' => $this->parsedLogs,
        ];
    }
    public function clearLogs(): void
{
    $logPath = storage_path('logs/laravel.log');
    
    if (file_exists($logPath)) {
        file_put_contents($logPath, '');
        $this->parsedLogs = [];
        // Pas besoin d'émettre d'événement, le réactivité Livewire gérera la mise à jour
    }
}

// Supprimez la méthode loadLogs() et utilisez plutôt mount() pour recharger
public function refreshLogs(): void
{
    $this->mount(); // Cela recharge les logs comme dans la méthode mount()
}
}
