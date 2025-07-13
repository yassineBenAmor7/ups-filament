<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class NewsCategory extends Model
{

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'parent_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'

    ];
}
