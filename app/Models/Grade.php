<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'type',
        'publier',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];    
}
