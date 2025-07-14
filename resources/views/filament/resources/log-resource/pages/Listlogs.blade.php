<x-filament::page>
    <h2>Visualisation des logs</h2>
    <!-- <a href="{{ route('filament.admin.resources.logs.index') }}" class="filament-button">
        Voir la liste des logs
    </a>
    <a href="{{ route('filament.admin.resources.logs.view-log') }}" class="filament-button">
        Voir le fichier de log
    </a> -->
   {{$logContent}}
</x-filament::page>