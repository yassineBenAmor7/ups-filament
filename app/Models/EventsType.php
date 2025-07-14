<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EventsType extends Model
{
    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'parent_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
