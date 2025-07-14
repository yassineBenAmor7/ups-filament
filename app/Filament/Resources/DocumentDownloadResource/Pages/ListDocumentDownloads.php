<?php

namespace App\Filament\Resources\DocumentDownloadResource\Pages;

use App\Filament\Resources\DocumentDownloadResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDocumentDownloads extends ListRecords
{
    protected static string $resource = DocumentDownloadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
