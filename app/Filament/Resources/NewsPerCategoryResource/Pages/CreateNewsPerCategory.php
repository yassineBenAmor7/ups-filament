<?php

namespace App\Filament\Resources\NewsPerCategoryResource\Pages;

use App\Filament\Resources\NewsPerCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsPerCategory extends CreateRecord
{
    protected static string $resource = NewsPerCategoryResource::class;
}
