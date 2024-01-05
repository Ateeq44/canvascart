<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model
{
    use HasFactory;
    protected $softDelete = true;
    protected $table = 'products';
    protected $guarded = [];



    public function category()
    {
        return $this->belongsTo('App\Models\Categories','cat_id');
    }

    

}
