<?php

namespace App\Models\Formulaire;

use Illuminate\Database\Eloquent\Model;
use LaraZeus\Bolt\Models\Response as BaseResponse;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Formulaire\Form;
class Response extends BaseResponse
{
   protected $fillable = [
    'form_id',
    'user_id',
    'status',
    'confirmation_code',
    'processed_at',
    'notes',
    'paper_response',
    'created_by',
    'updated_by',
];

protected $casts = [
   
    'processed_at' => 'datetime',
];
    
    public function user():BelongsTo
{
    return $this->belongsTo(User::class);
}
 
public function approvals()
{
    return $this->hasMany(ResponseApproval::class,'response_id');
}
//get the latest approval step ordre that user has submitted
public function getLastApprovalOrdre():?int
{
     
    $ordre= $this->approvals()
    ->join('nachd_form_workflow', 'nachd_response_approvals.workflow_step_id', '=', 'nachd_form_workflow.workflow_step_id')
    ->where('nachd_response_approvals.response_id', $this->id)
    ->max('nachd_form_workflow.ordre');
        
    return $ordre;
}
public function getNextApprovalStep()
{
    
    $formWorkflows = $this->form->workflowSteps()
        ->orderBy('nachd_form_workflow.ordre')
        ->get();

        
     $lastOrdre = $this->getLastApprovalOrdre() ;

       

     if ($lastOrdre === null) {
        
        return $formWorkflows->first();
    }
     $nextStep = $formWorkflows->first(function ($step) use ($lastOrdre) {
        return $step->pivot->ordre > $lastOrdre;
    });

   

    return $nextStep;
}

 protected static function booted(): void
{
    static::creating(function ($model) {
        $model->created_by = auth()->id();
        $model->updated_by = auth()->id();
       
    });

    static::updating(function ($model) {
        $model->updated_by = auth()->id();
    });
}


}
