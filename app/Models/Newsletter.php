<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'email',
        'created_by',
        'updated_by',
    ];
}
