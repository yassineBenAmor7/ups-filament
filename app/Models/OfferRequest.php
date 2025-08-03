<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class OfferRequest extends Model
{
    protected $fillable = [
        'user_id',
        'type_id',
        'status',
        'description',
    ];

    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}
    public function offerType(){
        return $this->belongsTo(OfferType::class ,'type_id');
    }
}
