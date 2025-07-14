<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Filament\Resources\BaseListRecords;
use App\ImportationExel;
use App\Imports\MyUserImport;
use App\Models\User;
use Filament\Actions;
use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Actions\Action;
use Illuminate\Support\Collection;

use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use function Symfony\Component\String\u;

class ListUsers extends BaseListRecords
{
    protected static string $resource = UserResource::class;

    protected static string $view = 'filament.resources.user-resource.pages.list-users';

}
