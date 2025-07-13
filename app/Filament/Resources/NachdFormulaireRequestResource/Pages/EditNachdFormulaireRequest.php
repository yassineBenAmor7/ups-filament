<?php

namespace App\Filament\Resources\NachdFormulaireRequestResource\Pages;

use App\Filament\Resources\NachdFormulaireRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNachdFormulaireRequest extends EditRecord
{
    protected static string $resource = NachdFormulaireRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
