<?php

namespace App\Livewire;

use Datlechin\FilamentMenuBuilder\Enums\LinkTarget;
use Datlechin\FilamentMenuBuilder\Livewire\CreateCustomLink;
use Datlechin\FilamentMenuBuilder\Models\Menu;
use Filament\Facades\Filament;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Filament\Support\Icons\IconManager;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateMenuItem extends CreateCustomLink
{
    use WithFileUploads; // Important pour la gestion des fichiers

    public $icon = '';
    public $cover_image=[]; // Ne pas initialiser comme tableau
    public $is_mega = false;
    public $is_publier = true;
    public $style_icon='outline';
    public $resource_name='';
    public string $url='/';


    public function save(): void

    {



        $style=[
            'outline' => 'o-',
            'solid' => 's-',
            'mini' => 'm-',
            'micro' => 'c-',
        ];

        $availableIcons = $this->getNameIcone();

        $validated = $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'icon' => [
                'nullable',
                'string',
                'max:50',
                function ($attribute, $value, $fail) use ($availableIcons, $style) {


                    $fullIcon = "{$style[$this->style_icon]}{$value}";




                    if (!in_array($fullIcon, $availableIcons)) {
                        $fail("The selected icon `{$this->icon}` with style `{$this->style_icon}` is not a valid Heroicon.");
                    }
                }
            ],
            'is_mega' => ['boolean'],
            'style_icon' => [
                'nullable',
                'string',
                'max:50',
                Rule::in(['outline', 'solid', 'mini', 'micro']),
            ],
            'is_publier' => ['boolean'],
            'url' => [
                'sometimes',
                'string',
                'starts_with:/',
            ],
            'resource_name' => [
                'nullable',
                'sometimes',
                'string',
                Rule::in($this->getResourcesNames()),
            ],
            'target' => ['required', 'string', Rule::in(LinkTarget::cases())],
        ]);

        if (!empty($this->cover_image)){
            $firstFile = array_values($this->cover_image)[0];
            $path = $firstFile->store('uploads/cover_images', 'public');
        }



        $this->menu->menuItems()->create([
            'title' => $validated['title'],
            'url' =>!($validated['resource_name']=='' && $validated['url']=='')?$this->menu->prefix. ($validated['resource_name']==""?$validated['url']:'/'.$validated['resource_name']):null ,
            'target' => $validated['target'],
            'icon' => $validated['icon']?$style[$validated['style_icon']].$validated['icon']:null,
            'cover_image' => $path ?? null,
            'is_mega' => $validated['is_mega'] ?? false,
            'is_publier' => $validated['is_publier'] ?? true,
            'order' => $this->menu->menuItems->max('order') + 1,
        ]);

        Notification::make()
            ->title(__('filament-menu-builder::menu-builder.notifications.created.title'))
            ->success()
            ->send();

        $this->reset(['title', 'url', 'target', 'cover_image', 'icon','resource_name']);
        $this->dispatch('menu:created');
    }

    public function form(Form $form): Form
    {



        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Titre')
                    ->required()
                    ->maxLength(255),

                TextInput::make('icon')
                    ->label('Icône')
                    ->placeholder('Ex: academic-cap')
                    ->hint(new HtmlString('Utilisez les <a href="https://heroicons.com/" target="_blank" class="underline">Heroicons</a>'))
                    ->maxLength(50),

                Select::make('style_icon')
                    ->label('Style de l’icône')
                    ->options([
                        'outline' => 'Outline',
                        'solid' => 'Solid',
                        'mini' => 'Mini',
                        'micro' => 'Micro',
                    ])
                    ->default('outline'),
                FileUpload::make('cover_image')
                    ->label('Image de couverture')
                    ->image()
                    ->multiple(false)
                    ,

                Checkbox::make('is_mega')
                    ->label('Mega Menu')
                    ->helperText('Cochez pour activer'),

                Checkbox::make('is_publier')
                    ->label('Publier')
                    ->default(true)
                    ->helperText('Visible sur le site'),

                Card::make()
                    ->schema([
                        Placeholder::make('')
                            ->content('Link item :')
                            ->extraAttributes(['class' => 'text-left font-medium text-gray-700 text-sm mb-2']),

                        TextInput::make('url')
                            ->label('URL')
                            ->maxLength(255)
                            ->nullable(),

                        Placeholder::make('')
                            ->content('— OR —')
                            ->extraAttributes(['class' => 'text-center text-gray-500 text-sm']),

                        Select::make('resource_name')
                            ->label('Link with Resources')
                            ->options($this->resourceNameSingular())
                            ->nullable()
                            ->searchable(),
                    ])
                    ->columnSpanFull(),


                Select::make('target')
                    ->label('Open In')
                    ->options(LinkTarget::class)
                    ->default(LinkTarget::Self),
            ]);
    }
    protected function getResourcesNames():array
    {
        $resources = Filament::getResources();

        return collect($resources)->map(function ($resource) {
            $url = $resource::getUrl();

            $lastSegment = Str::afterLast($url, '/');
            return $lastSegment !== 'menus' ? $lastSegment : null;
        })->filter()
            ->values()->toArray();

    }
    protected function resourceNameSingular()   :array{
        $resourceNameSingular = array_map(function ($name) {
            $singular = Str::singular($name);
            return Str::ucfirst($singular);
        }, $this->getResourcesNames());
        return   collect($resourceNameSingular)
            ->mapWithKeys(function ($label) {
                $key = Str::lower(Str::plural($label));
                return [$key => $label];
            })->toArray();

    }
    protected function getNameIcone():array
    {
        $path = base_path('vendor/blade-ui-kit/blade-heroicons/resources/svg');

        $iconFiles = File::files($path);
        $iconNames = collect($iconFiles)->map(function ($file) {
            return pathinfo($file->getFilename(), PATHINFO_FILENAME);
        })->toArray();
        return $iconNames;
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.create-menu-item');
    }
}
