<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BaseListRecords;

class ListStudents extends BaseListRecords
{
    protected static string $resource = StudentResource::class;

    
}
