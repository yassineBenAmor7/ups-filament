<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Partner extends Model
{
    protected $fillable = [
       'designation_fr','designation_en','designation_ar','logo','description_fr','description_en','description_ar','internationalisation','partner_categorie_id','link','publier'

    ];
}
