<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translations extends Model
{
    protected $table = 'translations';

    protected $fillable = [
        'table_name',
        'column_name',
        'foreign_key',
        'locale',
        'value',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
