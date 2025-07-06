<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timetables extends Model
{
    protected $table = 'timetables';

    protected $fillable = [
        'type',
        'file',
        'note',
        'department_id',
        'teacher_cin',
        'sector_id',
        'group_id',
        'group_td_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
        'publier',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function groupTd()
    {
        return $this->belongsTo(GroupTd::class, 'group_td_id');
    }
}
