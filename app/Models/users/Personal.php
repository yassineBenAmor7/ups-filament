<?php

namespace App\Models\users;

use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;

class Personal extends Model
{
    protected $fillable = [
        'id',
        'name',
        'cin',
        'identifiant_unique',
        'email',
        'grade_id',
        'affichage_in_front',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
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
