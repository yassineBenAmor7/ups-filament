<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    protected $table = 'chats';

    protected $fillable = [
        'user_id',
        'designation',
        'etat',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public $timestamps = true;

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
