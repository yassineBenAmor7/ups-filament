<?php

namespace App\Providers\Filament;
use Asmit\ResizedColumn\ResizedColumnPlugin;
use App\Filament\Plugins\MenuResource;
use Datlechin\FilamentMenuBuilder\FilamentMenuBuilderPlugin;
use Datlechin\FilamentMenuBuilder\Models\Menu;
use Filament\Http\Middleware\Authenticate;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Joaopaulolndev\FilamentEditProfile\FilamentEditProfilePlugin;
use Joaopaulolndev\FilamentEditProfile\Pages\EditProfilePage;
use Datlechin\FilamentMenuBuilder\Models\MenuItem as BuilderMenuItem; 
use Datlechin\FilamentMenuBuilder\Models\MenuItem;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->Profile()
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class
            ])
            ->plugins([
                
    FilamentEditProfilePlugin::make()
        ->slug('my-profile')
        ->setTitle('My Profile')
        ->setNavigationLabel('My Profile')
        ->setNavigationGroup('Group Profile')
        ->setIcon('heroicon-o-user')
        ->setSort(10)
        ->shouldShowDeleteAccountForm(false)
        ->shouldShowSanctumTokens()
        ->shouldShowBrowserSessionsForm()
        ->shouldShowAvatarForm(
    value: true,
    directory: 'users/avatars', 
    rules: 'mimes:jpeg,png,jpg|max:1024' 
        )
        ->customProfileComponents([
            \App\Livewire\CustomProfileComponent::class,
        ]),
    FilamentShieldPlugin::make(),
    ResizedColumnPlugin::make()
        ->preserveONDB(),
])
            ->userMenuItems([
    'profile' => \Filament\Navigation\MenuItem::make()
        ->label(fn() => auth()->name ?? 'Profil')
        ->url(fn (): string => EditProfilePage::getUrl())
        ->icon('heroicon-m-user-circle'),
])

            ->navigationItems($this->getNavigation())
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugin(FilamentMenuBuilderPlugin::make()
                ->usingResource(MenuResource::class)
            );
    }

    protected function getNavigation(): array
    {


        $items = [];

        $menuItems = MenuItem::select('menu_items.*')
            ->join('menus', 'menus.id', '=', 'menu_items.menu_id')
            ->where('menus.name', 'admin')
            ->where('menus.is_visible',1)
            ->with(['children.children' => fn($q) => $q->orderBy('order')])
            ->orderBy('order')
            ->get();

        //\Log::info($menuItems);

        $top = $menuItems->whereNull('parent_id');

        foreach ($top as $parent) {
            if ($parent->children->isEmpty()) {
                $items[] = NavigationItem::make($parent->title)
                    ->url($parent->url)
                    ->icon($parent->icon ?"heroicon-".$parent->icon: 'heroicon-o-link')
                    ->sort($parent->order * 1000);
            } else {
                foreach ($parent->children as $child) {
                    $items[] = NavigationItem::make($child->title)
                        ->url($child->url)
                        ->icon($child->icon ?"heroicon-".$child->icon:'heroicon-o-link')
                        ->group($parent->title)

                        ->sort($parent->order * 1000 + $child->order * 10);

                    foreach ($child->children as $grandchild) {
                        $items[] = NavigationItem::make($grandchild->title)
                            ->url($grandchild->url)
                            ->icon($grandchild->icon ?"heroicon-".$grandchild->icon: 'heroicon-o-link')
                            ->group($parent->title)
                            // Remplacé car MenuItem n'a pas de méthode label()
// ->label('  ' . $grandchild->title)

                            ->sort(
                                $parent->order * 1000 +
                                $child->order   * 10 +
                                $grandchild->order
                            );
                    }
                }
            }
        }

        return $items;
    }
}
