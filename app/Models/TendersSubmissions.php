<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TendersSubmissions extends Model
{
    protected $table = 'tender_submissions';

    protected $fillable = [
        'tender_id',
        'entreprise_id',
        'files',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function tender()
    {
        return $this->belongsTo(Tenders::class, 'tender_id');
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprises::class, 'entreprise_id');
    }
}
