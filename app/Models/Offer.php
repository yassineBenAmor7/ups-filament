<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    protected $fillable = [
        'id','company','designation_fr','designation_en','designation_ar','description_fr','description_en','description_ar','type','phone','address','responsible','email','created_by','updated_by','created_at','updated_at','cover','company_location'

    ];

    public function offer_users(){
        return $this->hasMany(OfferUser::class);
    }
    // public function entreprise(){
    //     return $this->belongsTo(Entreprise::class);
    // }
}
