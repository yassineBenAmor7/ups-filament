<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CourseRender extends Model
{
    public function groupTd(){
        return $this->belongsTo(GroupTd::class);
    }


}