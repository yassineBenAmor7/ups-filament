<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{


    protected $fillable = [
        'id','name','email','subject','message','destination_id','created_at','updated_at'
    ];
}
