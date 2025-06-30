<?php

namespace App\Filament\Resources;

use Filament\Resources\Pages\ListRecords;
use Asmit\ResizedColumn\HasResizableColumn;
use Filament\Actions;

class BaseListRecords extends ListRecords
{
    use HasResizableColumn;

   protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
