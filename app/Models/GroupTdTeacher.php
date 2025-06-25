<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class GroupTdTeacher extends Model
{
    protected $fillable = [
        'id',
        'teacher_cin',
        'group_td_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
    
       public function groupTd()
    {
        return $this->belongsTo(GroupTd::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
