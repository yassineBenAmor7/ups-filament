<?php

namespace App\Filament\Resources\DoctoralReportResource\Pages;

use App\Filament\Resources\DoctoralReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctoralReport extends EditRecord
{
    protected static string $resource = DoctoralReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
