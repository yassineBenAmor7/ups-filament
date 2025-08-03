<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Offer extends Model
{
    protected $fillable = [
        'company','designation_fr','designation_en','designation_ar','description_fr','description_en','description_ar','type','phone','address','responsible','email','cover','company_location'

    ];

    public function offer_users(){
        return $this->hasMany(OfferUser::class);
    }
    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }
    public function offertype(): BelongsTo
{
    return $this->belongsTo(OfferType::class);
}
}
