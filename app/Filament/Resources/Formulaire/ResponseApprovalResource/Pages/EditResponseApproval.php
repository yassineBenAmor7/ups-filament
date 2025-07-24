<?php

namespace App\Filament\Resources\Formulaire\ResponseApprovalResource\Pages;

use App\Filament\Resources\Formulaire\ResponseApprovalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResponseApproval extends EditRecord
{
    protected static string $resource = ResponseApprovalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
