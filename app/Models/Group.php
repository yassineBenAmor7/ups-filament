<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{

    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'publier',
        'sector_id',
        'level',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'

    ];
    public function groupTd(){
    	//return $this->hasMany('App\Models\GroupTd' , 'groupe_id' , 'id');
    }

    public function groupTp()
    {
        //return $this->hasMany('App\Models\GroupTp' , 'groupe_td_id' , 'id');
    }

    public function subjects(){
    	//return $this->hasMany('App\Models\Subject');
    }

    public function studentCourses(){
    	//return $this->belongsToMany(Course::class, 'cours_groups', 'group_id', 'course_id');
    }

    public function sector(){
    	//return $this->belongsTo('App\Models\Sector');
    }

}
