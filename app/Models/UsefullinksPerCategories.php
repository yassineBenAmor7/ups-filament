<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsefullinksPerCategories extends Model
{
    protected $table = 'usefullink_per_categories';

    protected $fillable = [
        'usefullink_id',
        'usefullinks_categorie_id',
        'publier',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function usefullink()
    {
        return $this->belongsTo(Usefullinks::class, 'usefullink_id');
    }

    public function category()
    {
        return $this->belongsTo(UsefullinksCategories::class, 'usefullinks_categorie_id');
    }
}
