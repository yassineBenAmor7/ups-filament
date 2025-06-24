<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class GroupTd extends Model
{
    public function students(){
    	return $this->hasMany('App\StudentsPredefinedList' , 'groupe_td_id' , 'id')->orderBy('students_predefined_lists.nom')->orderBy('students_predefined_lists.prenom');
    }
    protected $fillable = [
        'id',
        'groupe_id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'publier',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'

    ];

    

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function groupTp(){
    	return $this->hasMany('App\GroupTp' , 'groupe_td_id' , 'id');
    }
    
    public function groupeTdTeachers()
    {
        return $this->hasMany(GroupTdTeacher::class);
    }
}
