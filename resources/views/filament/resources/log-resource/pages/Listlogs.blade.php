<x-filament::page>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Visualisation des logs</h2>
        
        @if (filled($parsedLogs))
            <x-filament::button
                wire:click="clearLogs"
                color="danger"
                icon="heroicon-o-trash"
                size="sm"
                class="-mt-2"
            >
                Clear All
                <span wire:loading wire:target="clearLogs" class="ml-2">
                    <x-filament::loading-indicator class="h-4 w-4" />
                </span>
            </x-filament::button>
        @endif
    </div>

    {{-- Affiche les logs seulement s'ils existent --}}
    @if (filled($parsedLogs))
        <div class="bg-gray-900 p-4 rounded-lg font-mono text-sm overflow-auto max-h-[70vh]">
            @foreach ($parsedLogs as $log)
                <div @style([
                    'color: #f87171' => $log['type'] === 'alert',
                    'color: #60a5fa' => $log['type'] === 'error',
                    'color: #818386' => $log['type'] === 'info',
                ]) class="whitespace-pre-wrap py-1">
                    {{ $log['content'] }}
                </div>
            @endforeach
        </div>
    @endif
</x-filament::page>
