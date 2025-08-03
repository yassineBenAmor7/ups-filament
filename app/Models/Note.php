<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Note extends Model
{
    protected $perPage = 100;

    protected $fillable = [
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
        'group_td_designation'

    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function year(): BelongsTo
{
    return $this->belongsTo(Year::class);
}

    public function groupTd(): BelongsTo
{
    return $this->belongsTo(GroupTd::class);
}
}
