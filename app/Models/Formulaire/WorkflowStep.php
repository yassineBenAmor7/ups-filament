<?php

namespace App\Models\Formulaire;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkflowStep extends Model
{
     use SoftDeletes;

    protected $table = 'bolt_workflow_steps';
   protected $fillable = [
    'name',
    'description',
    'created_by',
    'updated_by',
];

protected $casts = [
    'ordre' => 'integer',
];
 public function creator()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'updated_by');
    }

    public function forms()
    {
        return $this->belongsToMany(Form::class, 
            config('zeus-bolt.table-prefix').'form_workflow')
            ->withPivot('ordre');
    }
    public function approvals()
    {
        return $this->hasMany(\App\Models\Formulaire\ResponseApproval::class);
    }
}
