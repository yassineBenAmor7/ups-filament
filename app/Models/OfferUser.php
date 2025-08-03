<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class OfferUser extends Model
{

    protected $fillable=['note','seen'];
    public function offer(){
    	return $this->belongsTo(Offer::class);
    }
    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}
}
