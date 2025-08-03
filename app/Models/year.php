<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;


class Year extends Model
{
    protected $fillable = [
        'designation'/*,'nb_student','nb_teacher','nb_personnel','nb_club','created_by','updated_by','created_at','updated_at','nb_courses','nb_doctorants_partners'

    */];


    // public function stages(){
    //     return $this->hasMany(Stage::class , 'year_id')->where('encadrant_cin',Auth::user()->cin);
    // }

    // public function stagesCompany(){
    //     return $this->hasMany(Stage::class , 'year_id')->where('entreprise_id',Auth::user()->entreprise_id);

    // }
}
