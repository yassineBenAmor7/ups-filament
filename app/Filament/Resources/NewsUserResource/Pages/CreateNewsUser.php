<?php

namespace App\Filament\Resources\NewsUserResource\Pages;

use App\Filament\Resources\NewsUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsUser extends CreateRecord
{
    protected static string $resource = NewsUserResource::class;
}
