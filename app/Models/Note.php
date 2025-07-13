<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Note extends Model
{
    protected $perPage = 100;

    protected $fillable = [
        'id',
        'student_cin',
        'student_name',
        'subject',
        'note',
        'semestre',
        'year_id',
        'subject_id',
        'publier',
        'reclamation',
        'desc_reclamation',
        'teacher_cin',
        'teacher_name',
        'group_td_id',
        'group_td_designation',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by'

    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
