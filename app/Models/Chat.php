<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Chat extends Model
{
    public function users_chat(){

        return $this->hasMany(UserChat::class , 'chat_id' , 'id');
    }
}
