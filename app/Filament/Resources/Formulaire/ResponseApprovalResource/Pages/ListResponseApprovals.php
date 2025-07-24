<?php

namespace App\Filament\Resources\Formulaire\ResponseApprovalResource\Pages;

use App\Filament\Resources\Formulaire\ResponseApprovalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResponseApprovals extends ListRecords
{
    protected static string $resource = ResponseApprovalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
