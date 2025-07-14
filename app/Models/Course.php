<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'description_fr',
        'description_en',
        'description_ar',
        'publier',
        'year_id',
        'subject_id',
        'teacher_id',
        'teacher_cin',
        'permission_comment',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
    public function chapters(){
    	return $this->hasMany('App\Chapter');
    }

    public function user(){
    	return $this->belongsTo(User::class , 'teacher_cin' , 'cin');
    }

    public function groups(){
        return $this->belongsToMany('App\GroupTd' , 'courses_group_tds');
    }

    public function subject(){
    	return $this->belongsTo('App\Subject');
    }

}
