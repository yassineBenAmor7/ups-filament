<?php

namespace App\Filament\Resources\NachdEtapedecisionFormulaireResource\Pages;

use App\Filament\Resources\NachdEtapedecisionFormulaireResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNachdEtapedecisionFormulaire extends EditRecord
{
    protected static string $resource = NachdEtapedecisionFormulaireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
