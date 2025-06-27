<?php

namespace App\Livewire;

use Datlechin\FilamentMenuBuilder\Enums\LinkTarget;
use Datlechin\FilamentMenuBuilder\FilamentMenuBuilderPlugin;
use Datlechin\FilamentMenuBuilder\Livewire\MenuItems;
use Datlechin\FilamentMenuBuilder\Models\MenuItem;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Component as FormComponent;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class EditMenuItem extends MenuItems
{


    public function editAction(): Action
    {

        return Action::make('edit')
            ->label(__('filament-actions::edit.single.label'))
            ->iconButton()
            ->size(ActionSize::Small)
            ->modalHeading(fn (array $arguments): string => __('filament-actions::edit.single.modal.heading', ['label' => $arguments['title']]))
            ->icon('heroicon-m-pencil-square')
            ->fillForm(fn (array $arguments): array => $this->findByIdWithRelations($arguments['id']))
            ->form($this->getEditFormSchema())

            ->action(function (array $data, array $arguments) {
                $style = [
                    'outline' => 'o-',
                    'solid' => 's-',
                    'mini' => 'm-',
                    'micro' => 'c-',
                ];


                try {
                    $validated = validator($data, [
                        'title' => ['required', 'string', 'max:255'],
                        'icon' => [
                            'nullable',
                            'string',
                            'max:50',
                            function ($attribute, $value, $fail) use ($style, $data) {
                                if (!isset($style[$data['style_icon']])) {
                                    return $fail("Invalid style selected.");
                                }

                                $fullIcon = "{$style[$data['style_icon']]}{$value}";

                                if (!in_array($fullIcon, $this->getNameIcone())) {
                                    $fail("The selected icon `{$data['icon']}` with style `{$data['style_icon']}` is not a valid Heroicon.");
                                }
                            },
                        ],

                        'is_mega' => ['boolean'],
                        'style_icon' => [
                            'required',
                            'string',
                            'max:50',
                            Rule::in(array_keys($style)), // ✅ Fix: use actual keys
                        ],
                        'cover_image' => ['nullable', 'string'],
                        'is_publier' => ['boolean'],
                        'url' => ['nullable', 'string'], // ✅ Fix: remove 'required'
                        'resource_name' => [
                            'nullable',
                            'sometimes',
                            'string',
                            Rule::in($this->getResourcesNames()),
                        ],
                        'target' => ['required', 'string', Rule::in(LinkTarget::cases())],
                    ])->validate();
                } catch (ValidationException $e) {
                    Notification::make()
                        ->title('Validation failed')
                        ->danger()
                        ->body('Please correct the errors and try again.')
                        ->send();
                    throw $e;
                }





                $this->update($arguments['id'], $validated);

                Notification::make()
                    ->title('Updated successfully')
                    ->success()
                    ->body('The menu item has been updated.')
                    ->send();
            })
            ->modalWidth(MaxWidth::Medium)
            ->slideOver();
    }

    protected function getEditFormSchema(): array
    {
        return [
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
                ->directory('uploads/cover_images')
                ->disk('public')
                ->visibility('public')
                ->maxSize(2048)
                ->acceptedFileTypes(['image/*'])
                ->previewable(false)

                ->dehydrated(true)




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
                        ->hidden(fn (?string $state, Get $get): bool => blank($state) || filled($get('linkable_type')))
                        ->required(),


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



            Placeholder::make('linkable_type')
                ->label('Type de lien')
                ->hidden(fn (?string $state): bool => blank($state))
                ->content(fn (string $state) => $state),

            Placeholder::make('linkable_id')
                ->label('ID du lien')
                ->hidden(fn (?string $state): bool => blank($state))
                ->content(fn (string $state) => $state),

            Select::make('target')
                ->label('Open In')
                ->options(LinkTarget::class)
                ->default(LinkTarget::Self),

            Group::make()
                ->visible(fn (FormComponent $component) => $component->evaluate(FilamentMenuBuilderPlugin::get()->getMenuItemFields()) !== [])
                ->schema(FilamentMenuBuilderPlugin::get()->getMenuItemFields()),
        ];
    }

    public function update(int $id, array $data): void
    {
        $style = [
            'outline' => 'o-',
            'solid' => 's-',
            'mini' => 'm-',
            'micro' => 'c-',
        ];


        $menuItem = MenuItem::findOrFail($id);
        $icon = $data['icon'] ?? null;
        $styleIcon = $data['style_icon'] ?? 'outline';
        $fullIcon = $icon ? ($style[$styleIcon] ?? 'o-') . $icon : null;


        $menuItem->update([
            'title' => $data['title'],
            'url' =>!($data['resource_name']=='' && $data['url']=='')?'/'.$this->menu->name.'/'. ($data['resource_name']==""?$data['url']:$data['resource_name']):null ,
            'target' => $data['target'],
            'cover_image' => $data['cover_image'] ?? null,
            'icon' => $fullIcon,
            'is_mega' => $data['is_mega'] ?? false,
            'is_publier' => $data['is_publier'] ?? true,
        ]);


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
    public function findByIdWithRelations(int $id):array
    {

        $style=[
            'o' => 'outline',
            's' => 'solid',
            'm' => 'mini',
            'c' => 'micro',
        ];

        $items= MenuItem::query()
            ->where('id', $id)
            ->with('linkable')
            ->first()
            ->toArray();
        $items['url'] = Str::after($items['url'], '/' . $this->menu->name);






        if ($items['icon']!=null) {
            $parts = explode('-', $items['icon'], 2);
            $items['icon'] = $parts[1];
            $items['style_icon']=$style[$parts[0]];
        }else {
            $items['style_icon']='outline';
        }
        $url_name=Str::afterLast( $items['url'], '/');
        if (in_array($url_name,$this->getResourcesNames())) {
            $items['resource_name']=$url_name;

        }

        return $items;
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
    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.edit-menu-item');
    }
}
