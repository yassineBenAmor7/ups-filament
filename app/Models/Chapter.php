<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Chapter extends Model
{
    protected $fillable = [
        'id', 
        'course_id', 
        'publier', 
        'type',
        'designation_fr',
        'designation_en', 
        'designation_ar', 
        'files',
        'description_fr', 
        'description_en',
        'description_ar',
        'created_by',
        'updated_by', 
        'created_at', 
        'updated_at'
        
    ];
}
