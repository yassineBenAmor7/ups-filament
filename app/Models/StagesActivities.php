<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StagesActivities extends Model
{
    protected $table = 'stage_activities';

    protected $fillable = [
        'stage_id',
        'candidat_id',
        'activity_date',
        'description',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    protected $dates = [
        'activity_date',
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function stage()
    {
        return $this->belongsTo(Stages::class, 'stage_id');
    }
}
