<?php

namespace App\Filament\Resources\NachdEtapedecisionTentativeResource\Pages;

use App\Filament\Resources\NachdEtapedecisionTentativeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNachdEtapedecisionTentative extends EditRecord
{
    protected static string $resource = NachdEtapedecisionTentativeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
