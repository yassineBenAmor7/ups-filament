<?php

namespace App\Models\users\students;

use App\Models\users\User;
use Illuminate\Database\Eloquent\Model;


class StudentsPredefinedList extends Model
{
    protected $fillable = [
        'cin','year_id','groupe_tp_id','groupe_td_id','groupe_id','nom','prenom','nom_ar','prenom_ar','numero_inscription','email' ,'payed_sem2' , 'level'

    ];


    /*public function groupTd(){
        return $this->belongsTo(GroupTd::class , 'groupe_td_id');
    }
    public function groupTp(){
        return $this->belongsTo(GroupTp::class , 'groupe_tp_id');
    }
    public function group(){
        return $this->belongsTo(Group::class , 'groupe_id');
    }
    public function sector(){
        return $this->belongsTo(Sector::class );
    }*/
    public function user(){
        return $this->belongsTo(User::class ,'cin' , 'cin');
    }

    public function department(){
        return $this->sector?->department_id;
    }
}
