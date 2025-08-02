<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Filament\Facades\Filament;

class BlogPostsOverview extends Widget
{
    protected static string $view = 'filament.widgets.blog-posts-overview';

    // Récupérer toutes les ressources du panel courant
    public function getCreatableResources(): array
{
    $panel = \Filament\Facades\Filament::getCurrentPanel();

    if (! $panel) {
        return [];
    }

    $resources = $panel->getResources();

    return array_filter($resources, function ($resourceClass) {
        $pages = $resourceClass::getPages();
        return isset($pages['create']);
    });
}
    // Construire l'URL de création pour une ressource donnée
    public function getResourceCreateUrl(string $resourceClass): string
    {
        return $resourceClass::getUrl('create');
    }
}
