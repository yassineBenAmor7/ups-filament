<?php

namespace App\Filament\Resources\BuzzVideoResource\Pages;

use App\Filament\Resources\BuzzVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBuzzVideos extends ListRecords
{
    protected static string $resource = BuzzVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
