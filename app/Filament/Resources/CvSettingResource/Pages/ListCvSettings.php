<?php

namespace App\Filament\Resources\CvSettingResource\Pages;

use App\Filament\Resources\CvSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCvSettings extends ListRecords
{
    protected static string $resource = CvSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
