<?php

namespace App\Filament\Resources\NachdFormulaireGroupementResource\Pages;

use App\Filament\Resources\NachdFormulaireGroupementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNachdFormulaireGroupement extends EditRecord
{
    protected static string $resource = NachdFormulaireGroupementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
