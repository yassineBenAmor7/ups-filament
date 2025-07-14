<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $fillable = [
        'id','designation_fr','designation_en','designation_ar','cover','place','organizer','date_start','date_end','description_fr','description_en','description_ar','publier','created_by','updated_by','created_at','updated_at'
    ];

    public function category()
    {
        // return $this->belongsToMany('App\NewsCategory', 'news_per_categories', 'news_id', 'news_category_id');
        return $this->belongsToMany('App\EventCategory', 'event_per_categories');
    }
    public function types()
    {
        return $this->belongsToMany('App\EventsType', 'event_per_types');
    }
    public function organism(){

        return $this->belongsTo(Organism::class );
    }
}
