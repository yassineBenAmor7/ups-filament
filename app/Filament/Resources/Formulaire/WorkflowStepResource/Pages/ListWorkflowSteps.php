<?php

namespace App\Filament\Resources\Formulaire\WorkflowStepResource\Pages;

use App\Filament\Resources\Formulaire\WorkflowStepResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkflowSteps extends ListRecords
{
    protected static string $resource = WorkflowStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
