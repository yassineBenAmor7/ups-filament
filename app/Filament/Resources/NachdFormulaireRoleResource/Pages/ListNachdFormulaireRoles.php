<?php

namespace App\Filament\Resources\NachdFormulaireRoleResource\Pages;

use App\Filament\Resources\NachdFormulaireRoleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNachdFormulaireRoles extends ListRecords
{
    protected static string $resource = NachdFormulaireRoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
