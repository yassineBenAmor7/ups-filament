<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NachdTentative extends Model
{
    use HasFactory;

    protected $fillable =['tentative','confirmation','author_id','date_acceptation','date_reception'];
}
