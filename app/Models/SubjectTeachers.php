<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectTeachers extends Model
{
    protected $table = 'subject_teachers';

    protected $fillable = [
        'subject_id',
        'teacher_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function subject()
    {
        return $this->belongsTo(Subjects::class, 'subject_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
