<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Categories extends Model
{
    use HasFactory;
    protected $softDelete = true;
    protected $table = 'categories';
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id');
    }
}
