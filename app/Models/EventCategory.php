<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EventCategory extends Model
{
    protected $fillable = [
        'id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'parent_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_per_categories', 'event_category_id', 'event_id')
                    ->where('events.publier', 1)
                    ->orderBy('events.date_start', 'desc');
    }
}
