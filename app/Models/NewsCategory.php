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
        'designation_fr',
        'designation_en',
        'designation_ar',
        'parent_id',

    ];
}
