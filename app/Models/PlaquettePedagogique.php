<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class PlaquettePedagogique extends Model
{
    protected $fillable = [
        'publier','description_fr','description_en','description_ar','file','sector_id','year_id','type','created_by','updated_by','created_at','updated_at'
    ];


    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function year()
    {
       // return $this->belongsTo(Year::class , 'year_id' , 'id');
    }
}
