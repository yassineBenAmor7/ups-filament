<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Period extends Model
{
    protected $fillable = ['designation_ar','designation_en','designation_fr','start_hour','end_hour'];

}
