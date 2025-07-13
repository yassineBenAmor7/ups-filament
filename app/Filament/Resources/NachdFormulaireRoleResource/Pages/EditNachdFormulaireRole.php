<?php

namespace App\Filament\Resources\NachdFormulaireRoleResource\Pages;

use App\Filament\Resources\NachdFormulaireRoleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNachdFormulaireRole extends EditRecord
{
    protected static string $resource = NachdFormulaireRoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
