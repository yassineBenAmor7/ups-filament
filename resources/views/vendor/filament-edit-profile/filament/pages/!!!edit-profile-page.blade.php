@php
    // On récupère tous les composants enregistrés
    $components = collect($this->getRegisteredCustomProfileComponents())
        // On exclut le composant "custom-profile-component"
        ->reject(fn ($component) => $component === 'custom-profile-component');
@endphp

<x-filament-panels::page>
    {{-- Affiche tous les composants sauf le custom-profile-component (donc en haut) --}}
    @foreach ($components as $component)
        @livewire($component)
    @endforeach

    <hr class="my-6">

    {{-- Affiche explicitement custom-profile-component en bas --}}
    <x-filament::section>
        @livewire('custom-profile-component')
    </x-filament::section>
</x-filament-panels::page>
