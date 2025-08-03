<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = [
        'name',
        'cin',
        'identifiant_unique',
        'email',
        'grade_id',
        'affichage_in_front',
        'service_fr',
        'service_en',
        'service_ar',
        'fonction_fr',
        'fonction_en',
        'fonction_ar',
        'phone',

    ];


    public function user(){
    	return $this->belongsTo(User::class ,'cin','cin');
    }
    public function grade(){
        return $this->belongsTo(Grade::class , 'grade_id');
    }
}
