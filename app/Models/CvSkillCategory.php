<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CvSkillCategory extends Model
{
    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'publier',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
    public function skills(){
    	return $this->hasMany('App\CvSkill' , 'cv_skill_category_id' , 'id');
    }
}
