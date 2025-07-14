<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CvSkill extends Model
{
    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'cv_skill_category_id',
        'publier',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}
