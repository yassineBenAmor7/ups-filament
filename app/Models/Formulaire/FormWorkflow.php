<?php

namespace App\Models\Formulaire;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Formulaire\WorkflowStep;

class FormWorkflow extends Pivot
{
     protected $table = 'nachd_form_workflow'; 
      protected $fillable = [
        'form_id',
        'workflow_step_id',
        'ordre'
    ];

    public function workflowStep()
    {
        return $this->belongsTo(WorkflowStep::class, 'workflow_step_id');
    }
    public function form()
    {
        return $this->belongsTo(Form::class,'form_id');
    }
}
