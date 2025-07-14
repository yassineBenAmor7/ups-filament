<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Feedback extends Model
{
    protected $fillable = [
        'id','subject','message','file','created_by','updated_by','created_at','updated_at'    
    ]; 
}
