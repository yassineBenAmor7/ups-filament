<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Absence extends Model
{
    protected $fillable = [
        'id',
        'student_id',
        'teacher_id',
        'group_td_id',
        'subject_id',
        'year_id',
        'year_designation',
        'subject_designation',
        'group_td_designation',
        'teacher_name',
        'teacher_cin',
        'student_name',
        'student_cin',
        'semestre',
        'date',
        'status',
        'publier',
        'reclamation',
        'period_id',
        'slug',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
    public function seance(){
    	return $this->belongsTo(Period::class ,'period_id');
    }

    public function subject(){
    	return $this->belongsTo(Subject::class );
    }

    // **************  wd  **************
    use HasFactory;

    protected $table = 'absences';

    public function students()
    {
        return $this->hasMany(AbsenceStudent::class, 'absence_id');
    }



     // **************  wd  **************

}
