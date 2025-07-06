<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $table = 'offers';

    protected $fillable = [
        'company',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'description_fr',
        'description_en',
        'description_ar',
        'type',
        'phone',
        'address',
        'responsible',
        'email',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'cover',
        'entreprise_id',
        'publier',
        'expiration_date',
        'mode',
        'offer_type_id',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'expiration_date',
    ];

    // Relationships
    public function entreprise()
    {
        return $this->belongsTo(Entreprises::class, 'entreprise_id');
    }

    public function offerType()
    {
        return $this->belongsTo(OffersTypes::class, 'offer_type_id');
    }
}
