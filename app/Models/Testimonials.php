<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'user_id',
        'user_name',
        'user_avatar',
        'message',
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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
