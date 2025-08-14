<?php

namespace App\Models\Formulaire;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class WorkflowStep extends Model
{
    

    protected $table = 'nachd_workflow_steps';
   protected $fillable = [
    'name',
    'description',
    'created_by',
    'updated_by',
   
];


 public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function forms()
    {
        return $this->belongsToMany(Form::class, 
            config('zeus-bolt.table-prefix').'form_workflow','workflow_step_id','form_id')
            
            ->withPivot(['ordre','role_id']);
    }
    public function approvals()
    {
        return $this->hasMany(\App\Models\Formulaire\ResponseApproval::class);
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
