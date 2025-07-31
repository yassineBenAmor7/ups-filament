<?php

namespace App\Models\Formulaire;

use Illuminate\Database\Eloquent\Model;

class FormPermission extends Model
{
     protected $table = 'nachd_form_permissions';
    
    protected $fillable = [
        'form_id',
        'role_id',
      
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    
}
