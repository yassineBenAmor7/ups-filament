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
    'approved_at',
    'notes',
];
 const STATUS_PENDING = 0;
 const STATUS_SUBMITTED = 1;//(intermediate step approved but not final)
 const STATUS_APPROVED = 2;
 const STATUS_REJECTED = 3;

protected $casts = [
    'status' => 'integer',
];



    

    public function response()
    {
        return $this->belongsTo(Response::class);
    }
    public function workflowStep()
{
    return $this->belongsTo(WorkflowStep::class);
}


}
