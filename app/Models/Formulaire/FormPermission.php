<?php

namespace App\Models\Formulaire;

use Illuminate\Database\Eloquent\Model;

class FormPermission extends Model
{
     protected $table = 'nachd_form_permissions';
     public $timestamps = true;
    protected $fillable = [
        'form_id',
        'role_id',
        'created_by',
        'updated_by',
        
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
    public function role()
    {
        return $this->belongsTo(\Spatie\Permission\Models\Role::class);
    }

  
}
