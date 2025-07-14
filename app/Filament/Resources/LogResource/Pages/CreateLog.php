<?php
namespace App\Filament\Resources\LogResource\Pages;

use App\Filament\Resources\LogResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLog extends CreateRecord
{
    protected static string $resource = LogResource::class;

    protected function afterCreate(): void
    {
        // Appel du log
        static::getResource()::logResourceCreation($this->record->id);
    }
}