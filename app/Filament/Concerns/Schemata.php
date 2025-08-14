<?php

namespace App\Filament\Concerns;
use Filament\Facades\Filament;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use LaraZeus\Accordion\Forms\Accordion;
use LaraZeus\Accordion\Forms\Accordions;
use LaraZeus\Bolt\BoltPlugin;
use LaraZeus\Bolt\Facades\Bolt;
use App\Models\Formulaire\Category;
use App\Models\Formulaire\WorkflowStep;
use App\Models\Formulaire\Form; 
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
trait Schemata
{
    protected static function getVisibleFields(array $sections, array $arguments): array
    {
        // @phpstan-ignore-next-line
        return collect($sections)
            ->map(function (array $sections) use ($arguments) {
                // @phpstan-ignore-next-line
                $sections['fields'] = collect($sections['fields'])
                    ->reject(function ($item, $key) use ($arguments) {
                        return $key === $arguments['item'] ||
                            ! (
                                isset($item['options']['dataSource']) ||
                                $item['type'] === '\LaraZeus\Bolt\Fields\Classes\Toggle'
                            );
                    })->all();

                return $sections;
            })->all();
    }

    protected static function sectionOptionsFormSchema(array $formOptions, array $allSections): array
    {
        return [
            TextInput::make('description')
                ->hidden(fn (Get $get) => $get('borderless') === true)
                ->nullable()
                ->live()
                ->visible($formOptions['show-as'] !== 'tabs')
                ->label(__('Section Description')),

            Accordions::make('section-options')
                ->accordions(fn () => array_filter([
                    Accordion::make('visual-options')
                        ->label(__('Visual Options'))
                        ->columns()
                        ->icon('tabler-list-details')
                        ->schema([
                            Select::make('columns')
                                ->options(fn (): array => array_combine(range(1, 12), range(1, 12)))
                                ->required()
                                ->default(1)
                                ->hint(__('fields per row'))
                                ->label(__('Section Columns')),
                           
                            Toggle::make('aside')
                                ->default(false)
                                ->visible(fn (Get $get) => $formOptions['show-as'] === 'page' && $get('borderless') === false)
                                ->label(__('show as aside')),
                            Toggle::make('borderless')
                                ->live()
                                ->default(false)
                                ->visible($formOptions['show-as'] === 'page')
                                ->label(__('Borderless Section'))
                                ->helperText('Show the section without borders'),
                            Toggle::make('compact')
                                ->default(false)
                                ->visible(fn (Get $get) => $formOptions['show-as'] === 'page' && $get('borderless') === false)
                                ->label(__('Compact section')),
                        ]),
                  self::visibility($allSections),
                    Bolt::getCustomSchema('section') ?? [],
                ])),
        ];
    }

    public static function getMainFormSchema(): array
    {
        return [
            Hidden::make('user_id')->default(auth()->user()->id ?? null),

            Tabs::make('form-tabs')
                ->tabs(static::getTabsSchema())
                ->columnSpan(2),

            Repeater::make('sections')
                ->hiddenLabel()
                ->schema(static::getSectionsSchema())
                ->relationship()
                ->orderColumn('ordering')
                ->addActionLabel(__('Add Section'))
                ->cloneable()
                ->collapsible()
                ->collapsed(fn (string $operation) => $operation === 'edit')
                ->minItems(1)
                ->extraItemActions([
                    // @phpstan-ignore-next-line
                    Bolt::hasPro() ? \LaraZeus\BoltPro\Actions\SectionMarkAction::make('marks') : null,

                    Action::make('options')
                        ->label(__('section options'))
                        ->slideOver()
                        ->color('warning')
                        ->tooltip(__('more section options'))
                        ->icon('heroicon-m-cog')
                        ->fillForm(fn (
                            array $arguments,
                            Repeater $component
                        ) => $component->getItemState($arguments['item']))
                        ->form(function (array $arguments, Get $get) {
                            $formOptions = $get('options');
                            $allSections = $get('sections');
                            unset($allSections[$arguments['item']]);

                            $allSections = self::getVisibleFields($allSections, $arguments);

                            return static::sectionOptionsFormSchema($formOptions, $allSections);
                        })
                        ->action(function (array $data, array $arguments, Repeater $component): void {
                            $state = $component->getState();
                            $state[$arguments['item']] = array_merge($state[$arguments['item']], $data);
                            $component->state($state);
                        }),
                ])
                ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                ->columnSpan(2),
        ];
    }

    public static function getTabsSchema(): array
    {
        $tabs = [
            Tabs\Tab::make('title-slug-tab')
                ->label(__('Informations de base'))
                ->columns()
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->label(__('Nom du formulaire'))
                        ->afterStateUpdated(function (Set $set, $state, $context) {
                            if ($context === 'edit') {
                                return;
                            }
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->rules(['alpha_dash'])
                        ->unique(ignoreRecord: true)
                        ->label(__('Slug')),
                     Textarea::make('description')
                        ->label(__('Description')),
                     Select::make('category_id')
                        ->label('Catégorie')
                        ->searchable()
                        ->preload()
                        ->relationship('category', 'name', modifyQueryUsing: fn (Builder $query) => Filament::getTenant() ? BoltPlugin::getModel('Category')::query()->whereBelongsTo(Filament::getTenant()) : $query)
                        ->createOptionForm([
                            TextInput::make('name')->required()->maxLength(255)->label('Nom'),
                            TextInput::make('slug')->required()->maxLength(255)->label('Identifiant'),
                        ])
                        ->createOptionAction(fn (Action $action) => $action->hidden(auth()->user()->cannot('create', BoltPlugin::getModel('Category'))))
                        ->getOptionLabelFromRecordUsing(fn (Category $record) => $record->name),
                ]),

            Tabs\Tab::make('content-tab')
                ->label(__('Contenu'))
                ->schema([
                     RichEditor::make('header')->label('En-tête du formulaire'),
                    RichEditor::make('footer')->label('Pied du formulaire'),
                 
                    FileUpload::make('options.logo')
                      ->disk(config('zeus-bolt.uploadDisk'))
                     ->directory(config('zeus-bolt.uploadDirectory'))
                      ->visibility(config('zeus-bolt.uploadVisibility'))
                        ->image()
                        ->imageEditor()
                        ->label(__('Logo'))
                        ->preserveFilenames(),
                    FileUpload::make('options.cover')
                        ->disk(config('zeus-bolt.uploadDisk'))
                        ->directory(config('zeus-bolt.uploadDirectory'))
                        ->visibility(config('zeus-bolt.uploadVisibility'))
                        ->image()
                        ->imageEditor()
                        ->label(__('Cover'))
                        ->preserveFilenames(),
                    RichEditor::make('response_header')->label('En-tête de réponse'),
                    RichEditor::make('response_footer')->label('Pied de réponse'),
                    Textarea::make('response_template')->label('Modèle de réponse (JSON)')->rows(6),
                ]),

            Tabs\Tab::make('visibility-access-tab')
                ->label('Affichage & Accès')
                ->columns(2)
                ->schema([
                    Grid::make()->schema([
                       Select::make('roles')
    ->label('Rôles autorisés à accéder au formulaire')
    ->relationship('roles', 'name')
    ->multiple()
    ->preload()
    ->searchable()
   
    ->dehydrated(false) 
    ->createOptionForm([
                    TextInput::make('name')->required(),
                ])
                ->createOptionUsing(fn ($data) => Role::create([
                    'name' => $data['name'],
                    'guard_name' => 'web',
                ])->id)
    ->afterStateHydrated(function ($component, $state, $record) {
        $component->state($record?->roles?->pluck('id')->toArray() ?? []);
    })
    ->afterStateUpdated(function ($state, $get, $set, $livewire) {
        $form = $livewire->record;

        if ($form) {
            $pivotData = [];
            foreach ($state as $roleId) {
                $pivotData[$roleId] = [
                    'created_by' => auth()->id(),
                    'updated_by' => auth()->id(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

               
                $role = Role::find($roleId);
                if ($role) {
                    $formPermissions = Permission::where('name', 'like', '%_form')->get();
                    foreach ($formPermissions as $perm) {
                        if (! $role->hasPermissionTo($perm)) {
                            $role->givePermissionTo($perm);
                        }
                    }
                }
            }
            $form->roles()->sync($pivotData);
        }
    }),

                 
                    ]),
                    Grid::make()->schema([
                        Toggle::make('is_active')->label('Actif')->default(true),
                        Toggle::make('options.require-login')->label('Connexion requise')->live()->default(fn ($record) => $record?->options['require-login'] ?? false),
                        Toggle::make('options.one-entry-per-user')->label('Une soumission par utilisateur')
                            ->visible(fn (Get $get) => $get('options.require-login'))
                             ->default(fn ($record) => $record?->options['one-entry-per-user'] ?? false),
                    ]),
                   
                 Grid::make()
                        ->columnSpan(1)
                        ->columns(1)
                        ->schema([
                            Radio::make('options.show-as')
                                ->label(__('Show the form as'))
                                ->live()
                                ->default('page')
                                ->descriptions([
                                    'page' => __('show all sections on one page'),
                                    'wizard' => __('separate each section in steps'),
                                    'tabs' => __('Show the Form as Tabs'),
                                ])
                                ->options([
                                    'page' => __('Show on one page'),
                                    'wizard' => __('Show As Wizard'),
                                    'tabs' => __('Show As Tabs'),
                                ]),
                                  ]),
                                   TextInput::make('ordering')
                        ->numeric()
                        ->label(__('ordering'))
                        ->default(1),
                ]),
            Tabs\Tab::make('form-settings-tab')
                ->label(__('Paramètres'))
                ->schema([
                    Grid::make()
                        ->columns()
                        ->schema([
                             TextInput::make('action')->label('URL d\'action personnalisée'),
                        Select::make('method')->label('Méthode HTTP')->options(['POST' => 'POST', 'GET' => 'GET'])->default('POST'),
                        Toggle::make('accept_files')->label('Accepter les fichiers'),
                        Toggle::make('has_decision')
                    ->label('Avec processus de décision')
                    ->live()
                    ->columnSpanFull(),
                        TextInput::make('form_for')->label('Cible '),
                       

                            Placeholder::make('form-dates')
                               ->label('Dates du formulaire')
                            ->content('Optionnel, spécifiez quand le formulaire sera actif et recevra de nouvelles entrées'),
                            DateTimePicker::make('start_date')
                                ->requiredWith('end_date')
                                ->label(__('Start Date')),
                            DateTimePicker::make('end_date')
                                ->requiredWith('start_date')
                                ->label(__('End Date')),
                        ]),
                    Grid::make()
                        ->columns()
                        ->schema([
                            TextInput::make('options.emails-notification')
                                ->label(__('Emails Notifications'))
                                 ->default(fn ($record) => $record?->options['emails-notification'] ?? '')
                                ->helperText(__('optional, enter the emails (comma separated) you want to receive notification when ever you got a new entry')),
                        ]),
                ]),
                
         Tabs\Tab::make('workflow-tab')
    ->label(__('Etapes de Décision'))
    ->visible(fn (Get $get) => $get('has_decision'))
    ->schema([
        Repeater::make('workflow_config')
    ->label('Étapes du workflow')
    ->schema([
        Select::make('workflow_step_id')
            ->label('Étape')
            ->options(\App\Models\Formulaire\WorkflowStep::pluck('name', 'id'))
            ->createOptionForm([
                TextInput::make('name')
                    ->label('Nom de l’étape')
                    ->required(),
                TextInput::make('description')
                    ->label('Description'),
            ])
            ->required()
 ->createOptionUsing(function (array $data) {
        return \App\Models\Formulaire\WorkflowStep::create([
            'name' => $data['name'],
            'description' => $data['description'] ?? null,
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
        ]);
    }),
        Select::make('role_id')
            ->label('Rôle responsable')
            ->options(Role::pluck('name', 'id'))
            ->searchable()
            ->required()
             ->afterStateUpdated(function ($state, $old) {
       
         $permission = Permission::firstOrCreate(['name' => 'submit_response_form']);

    // Add to new role
    if ($state && $newRole = Role::find($state)) {
        if (! $newRole->hasPermissionTo($permission)) {
            $newRole->givePermissionTo($permission);
        }
    }

    app(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
    }),

        TextInput::make('ordre')
            ->label('Ordre')
            ->numeric()
            ->minValue(1)
            ->required(),
    ])
    ->minItems(1)
    ->columnSpanFull()
    
    
    ]),

               
           
 
        ];

        $customSchema = Bolt::getCustomSchema('form');

        if ($customSchema !== null) {
            $tabs[] = $customSchema;
        }

        return $tabs;
    }

    public static function getSectionsSchema(): array
    {
        return array_filter([
            TextInput::make('name')
                ->columnSpanFull()
                ->required()
                ->lazy()
                ->label(__('Section Name')),

            Placeholder::make('section-fields-placeholder')
                ->label(__('Section Fields')),

            Repeater::make('fields')
                ->relationship()
                ->orderColumn('ordering')
                ->cloneable()
                ->minItems(1)

                ->cloneAction(fn (Action $action) => $action->action(function (Component $component, $arguments) {
                    $items = $component->getState();
                    $originalItem = $items[$arguments['item']];
                    $clonedItem = array_merge($originalItem, [
                        'name' => $originalItem['name'] . ' new',
                        'options' => array_merge($originalItem['options'], [
                            'htmlId' => $originalItem['options']['htmlId'] . Str::random(2),
                        ]),
                    ]);

                    $items[] = $clonedItem;
                    $component->state($items);

                    return $items;
                }))
                ->collapsible()
                ->collapsed(fn (string $operation) => $operation === 'edit')
                ->grid([
                    'default' => 1,
                    'md' => 2,
                    'xl' => 3,
                    '2xl' => 3,
                ])
                ->label('')
                ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                ->addActionLabel(__('Add field'))
                ->extraItemActions([
                   

                    Action::make('fields options')
                        ->slideOver()
                        ->color('warning')
                        ->tooltip('more field options')
                        ->icon('heroicon-m-cog')
                        ->modalIcon('heroicon-m-cog')
                        ->modalDescription(__('advanced fields settings'))
                        ->fillForm(
                            fn (array $arguments, Repeater $component) => $component->getItemState($arguments['item'])
                        )
                        ->form(function (Get $get, array $arguments, Repeater $component) {
                            $allSections = self::getVisibleFields($get('../../sections'), $arguments);

                            return [
                                Textarea::make('description')
                                    ->label(__('Field Description')),
                                Group::make()
                                    ->label(__('Field Options'))
                                    ->schema(function (Get $get) use ($allSections, $component, $arguments) {
                                        $class = $get('type');
                                        if (class_exists($class)) {
                                            $newClass = (new $class);
                                            if ($newClass->hasOptions()) {
                                                return $newClass->getOptions($allSections, $component->getState()[$arguments['item']]);
                                            }
                                        }

                                        return [];
                                    }),
                            ];
                        })
                        ->action(function (array $data, array $arguments, Repeater $component): void {
                            $state = $component->getState();
                            $state[$arguments['item']] = array_merge($state[$arguments['item']], $data);
                            $component->state($state);
                        }),
                ])
                ->schema(static::getFieldsSchema()),

            Hidden::make('compact')->default(0)->nullable(),
            Hidden::make('aside')->default(0)->nullable(),
            Hidden::make('borderless')->default(0)->nullable(),
           
            Hidden::make('columns')->default(1)->nullable(),
            Hidden::make('description')->nullable(),
            Hidden::make('options.visibility.active')->default(0)->nullable(),
            Hidden::make('options.visibility.fieldID')->nullable(),
            Hidden::make('options.visibility.values')->nullable(),
            ...Bolt::getHiddenCustomSchema('section') ?? [],
        ]);
    }

    public static function getCleanOptionString(array $field): string
    {
        return
            view('zeus::filament.fields.types')
                ->with('field', $field)
                ->render();
    }

    public static function getFieldsSchema(): array
    {
        return [
            Hidden::make('description'),
            TextInput::make('name')
                ->required()
               
                ->label(__('Field Name')),

        TextInput::make('ordering')
            ->numeric()
            ->label(__('Ordering')),
            Select::make('type')
                ->required()
                ->searchable()
                ->preload()
                ->getSearchResultsUsing(function (string $search) {
                    return Bolt::availableFields()
                        ->filter(fn ($q) => str($q['title'])->contains($search))
                        ->mapWithKeys(fn ($field) => [$field['class'] => static::getCleanOptionString($field)])
                        ->toArray();
                })
                ->allowHtml()
                ->extraAttributes(['class' => 'field-type'])
                ->options(function (): array {
                    return Bolt::availableFields()
                        ->mapWithKeys(function ($field) {
                            return [$field['class'] => static::getCleanOptionString($field)];
                        })
                        ->toArray();
                })
                ->live()
                ->default('\LaraZeus\Bolt\Fields\Classes\TextInput')
                ->label(__('Field Type')),
            Group::make()
                ->schema(function (Get $get) {
                    $class = $get('type');
                    if (class_exists($class)) {
                        $newClass = (new $class);
                        if ($newClass->hasOptions()) {
                            // @phpstan-ignore-next-line
                            return collect($newClass->getOptionsHidden())->flatten()->toArray();
                        }
                    }

                    return [];
                }),
        ];
    }
}
