<?php

namespace App\Filament\Resources\TendersEnterprisesResource\Pages;

use App\Filament\Resources\TendersEnterprisesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTendersEnterprises extends EditRecord
{
    protected static string $resource = TendersEnterprisesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
