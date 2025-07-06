<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffersUsers extends Model
{
    protected $table = 'offer_users';

    protected $fillable = [
        'offer_id',
        'user_id',
        'note',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'seen',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function offer()
    {
        return $this->belongsTo(Offers::class, 'offer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
