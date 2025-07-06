<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model
{
    protected $table = 'entreprises';

    protected $fillable = [
        'designation',
        'logo',
        'phone',
        'email',
        'address',
        'fax',
        'description',
        'location',
        'responsable_name',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
        'publier',
        'website',
        'domaine_id',
        'slug',
        'validation',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function domaine()
    {
        return $this->belongsTo(Domaines::class, 'domaine_id');
    }
}
