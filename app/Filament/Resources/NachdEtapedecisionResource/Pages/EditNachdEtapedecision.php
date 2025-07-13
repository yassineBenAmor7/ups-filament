<?php

namespace App\Filament\Resources\NachdEtapedecisionResource\Pages;

use App\Filament\Resources\NachdEtapedecisionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNachdEtapedecision extends EditRecord
{
    protected static string $resource = NachdEtapedecisionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
