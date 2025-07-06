<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offersrequests extends Model
{
    protected $table = 'offer_requests';

    protected $fillable = [
        'user_id',
        'type_id',
        'domaine',
        'description',
        'start_date',
        'end_date',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'publier',
    ];

    public $timestamps = false;

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function type()
    {
        return $this->belongsTo(OffersTypes::class, 'type_id');
    }
}
