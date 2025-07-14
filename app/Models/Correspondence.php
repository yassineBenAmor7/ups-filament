<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Correspondence extends Model
{
    protected $fillable = [
        'id',
        'source',
        'arrival_date',
        'correspondence_date',
        'correspondence_number',
        'subject',
        'files',
        'type',
        'consignee',
        'delivery_date',
        'sender',
        'slug',
        'publier',
        'notes',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
