<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class OfferRequest extends Model
{
    public function offerType(){
        return $this->belongsTo(OfferType::class ,'type_id');
    }
}
