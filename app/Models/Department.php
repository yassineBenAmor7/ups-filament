<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Department extends Model
{
    // public function chef(){
    // 	return $this->belongsTo('App\Models\User' , 'chef_id' , 'id');
    // }
    public function teacher(){
    	// return $this->belongsTo('App\Teacher' , 'chef_id' , 'id');
    	return $this->belongsTo('App\Models\Teacher' , 'teacher_cin' , 'cin');
    }
    public function teachers(){
    	// return $this->belongsTo('App\Teacher' , 'chef_id' , 'id');
    	return $this->hasMany('App\Models\Teacher');
    }
    public function sectors(){
    	return $this->hasMany('App\Models\Sector');

    }

    protected $fillable = [
        'id',
        'teacher_cin',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'publier',
        'cover',
        'description_fr',
        'description_en',
        'description_ar',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'

    ];
}