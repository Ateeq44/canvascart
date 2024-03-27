<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;
    protected $softDelete = true;
    protected $table = 'sub_categories';
    protected $guarded = [];

    public function categorys()
    {
        return $this->belongsTo(Categories::class, 'cat_id');
    }
}
