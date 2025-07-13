<?php

namespace App\Filament\Resources\MasterDiplomaResource\Pages;

use App\Filament\Resources\MasterDiplomaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasterDiplomas extends ListRecords
{
    protected static string $resource = MasterDiplomaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
