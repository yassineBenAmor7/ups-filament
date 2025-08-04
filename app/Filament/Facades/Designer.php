<?php
namespace App\Filament\Facades;

use App\Filament\Concerns\Schemata;
use LaraZeus\Bolt\Concerns\HasOptions;
use LaraZeus\Bolt\Facades\Designer as BaseDesigner;
class Designer extends BaseDesigner
{
 use HasOptions;
    use Schemata;
}