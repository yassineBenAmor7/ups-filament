<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NachdInput extends Model
{
    use HasFactory;

    protected $fillable =['label_fr','label_en','label_ar','type','name','value','identifiant','class_style','placeholder','zone','options','model_bd','information_recuperable','attribut_to_use','table_to_use'];
}
