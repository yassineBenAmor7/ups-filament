<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CvEducation extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'cv_education_type_id',
        'start',
        'end',
        'is_current',
        'place',
        'description',
        'publier',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
    protected $table = 'cv_educations';
}
