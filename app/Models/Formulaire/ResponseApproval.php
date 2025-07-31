<?php

namespace App\Models\Formulaire;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class ResponseApproval extends Model
{
     protected $table = 'nachd_response_approvals';
    protected $fillable = [
    'response_id',
    'workflow_step_id',
    'status',
    'approved_by',
    'updated_by',
    'notes',
];
 const STATUS_PENDING = 0;
 const STATUS_APPROVED = 1;
 const STATUS_REJECTED = 2;

protected $casts = [
    'status' => 'integer',
];

public function approver()
{
    return $this->belongsTo(User::class, 'approved_by');
}

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function response()
    {
        return $this->belongsTo(Response::class);
    }
    public function workflowStep()
{
    return $this->belongsTo(WorkflowStep::class);
}
 protected static function booted(): void
{
    static::creating(function ($model) {
        $model->approved_by = auth()->id();
        $model->updated_by = auth()->id();
    });

    static::updating(function ($model) {
        $model->updated_by = auth()->id();
    });
}

}
