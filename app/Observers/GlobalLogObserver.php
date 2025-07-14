<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;
use App\Models\StudentsPredefinedList;

class GlobalLogObserver
{
    public function created(Model $model)
    {
        $this->logEvent($model, 'created');
    }

    public function updated(Model $model)
    {
        $this->logEvent($model, 'updated');
    }

    public function deleted(Model $model)
    {
        $this->logEvent($model, 'deleted');
    }

    protected function logEvent(Model $model, string $action)
    {
        // Empêche la boucle infinie sur Log
        if ($model instanceof Log) {
            return;
        }
        if ($model instanceof StudentsPredefinedList && $model->student) {
        $data['numero_inscription'] = $model->student->numero_inscription;
    }

        Log::create([
            'user_id'     => Auth::id(),
            'table_name'  => $model->getTable(),
            'action'      => $action,
            'description' => class_basename($model) . " {$action}",
            'data'        => $model->toArray(),
        ]);
    }
}