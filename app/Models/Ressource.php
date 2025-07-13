<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Ressource extends Model
{
    protected $fillable = [
        'id',
        'ressource_category_id',
        'designation_fr',
        'designation_en',
        'designation_ar',
        'pu',
        'cover',
        'quantity',
        'note',
        'supplier_id',
        'description_fr',
        'description_en',
        'description_ar',
        'seul',
        'stock_reserved',
        'must_be_returned',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
    public function category(){
        return $this->belongsTo(RessourceCategory::class , 'ressource_category_id');
    }
    public function supplier(){
        return $this->belongsTo(RessourceSupplier::class);
    }
}
