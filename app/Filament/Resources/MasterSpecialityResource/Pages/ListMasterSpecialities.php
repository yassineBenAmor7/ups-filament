<?php

namespace App\Filament\Resources\MasterSpecialityResource\Pages;

use App\Filament\Resources\MasterSpecialityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasterSpecialities extends ListRecords
{
    protected static string $resource = MasterSpecialityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
