<?php

namespace App\Filament\Resources\users\PersonalResource\Pages;

use App\Filament\Resources\users\PersonalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePersonal extends CreateRecord
{
    protected static string $resource = PersonalResource::class;
}
