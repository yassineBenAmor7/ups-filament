<?php

namespace App\Filament\Resources\DocumentDownloadResource\Pages;

use App\Filament\Resources\DocumentDownloadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocumentDownload extends EditRecord
{
    protected static string $resource = DocumentDownloadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
