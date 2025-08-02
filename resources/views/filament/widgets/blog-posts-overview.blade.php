<x-filament::widget>
    <div x-data="{
        search: '',
        matches(resource) {
            return resource.toLowerCase().startsWith(this.search.toLowerCase());
        },
        hasMatches() {
            return Array.from($el.querySelectorAll('[data-resource]')).some(el =>
                this.matches(el.dataset.resource)
            );
        }
    }" class="max-w-xl mx-auto">
        <x-filament::card x-ignore class="bg-white shadow-md rounded-xl p-6">
            <!-- Titre -->
            <h2 class="text-2xl font-semibold text-gray-800 text-center">Accéder à la page create d'une ressource</h2>

            <!-- Espacement après le titre -->
            <div class="mt-6 mb-6">
                <input
                    type="text"
                    x-model="search"
                    placeholder="Recherche..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    autocomplete="off"
                />
            </div>

            <!-- Résultats -->
            <div class="space-y-3 transition-all duration-200">
                @foreach ($this->getCreatableResources() as $resource)
                    @php
                        $name = class_basename($resource);
                        $nameSlug = strtolower($name);
                    @endphp

                    <div
                        x-show="search !== '' && matches('{{ $nameSlug }}')"
                        x-transition
                        x-cloak
                        data-resource="{{ $nameSlug }}"
                    >
                        <x-filament::button
                            tag="a"
                            href="{{ $this->getResourceCreateUrl($resource) }}"
                            color="primary"
                            size="lg"
                            class="w-full justify-center rounded-md shadow-sm"
                        >
                             {{ $name }}
                        </x-filament::button>
                    </div>
                @endforeach
            </div>

            <!-- Message si aucun résultat -->
<div
    x-show="search !== '' && !hasMatches()"
    x-transition
    x-cloak
    class="mt-6 flex items-center justify-center gap-2 text-danger-700 text-sm font-medium"
>
    <x-heroicon-o-x-circle class="h-5 w-5 text-danger-600" />
    <span>
        Aucune ressource trouvée pour <span class="font-semibold" x-text="search"></span>.
    </span>
</div>
        </x-filament::card>
    </div>
</x-filament::widget>
