<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Message extends Model
{
    protected $fillable = [
        'id','sender_id','receiver_id','content','seen','files','created_at','updated_at','user_id','chat_id'
        
    ];
    
    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}

}
