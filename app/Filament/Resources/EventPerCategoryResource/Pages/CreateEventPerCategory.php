<?php

namespace App\Filament\Resources\EventPerCategoryResource\Pages;

use App\Filament\Resources\EventPerCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEventPerCategory extends CreateRecord
{
    protected static string $resource = EventPerCategoryResource::class;
}
