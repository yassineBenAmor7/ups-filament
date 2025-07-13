<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class RessourceSupplier extends Model
{
    protected $fillable = [
        'id',
        'logo',
        'raison_social',
        'mf',
        'address',
        'email',
        'phone1',
        'phone2',
        'website',
        'domaine',
        'responsable_name',
        'responsable_email',
        'responsable_phone',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
