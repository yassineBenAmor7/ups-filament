<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserChats extends Model
{
    protected $table = 'user_chats';

    protected $fillable = [
        'user_id',
        'chat_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
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

    public function chat()
    {
        return $this->belongsTo(Chats::class, 'chat_id');
    }
}
