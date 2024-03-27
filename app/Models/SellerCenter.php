<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerCenter extends Model
{
    use HasFactory;
    protected $table = 'seller_centers';
    protected $fillable = [
        'store_name',
        'slug',
        'email',
        'phone',
        'country',
        'city',
        'address',
        'id_card_front',
        'id_card_back',
        'id_card_name',
        'cnic',
        'address1',
        'bank_statement',
        'acco_holder_name',
        'iban_no',
        'bank_name',
        'branch_name',
        'created_by',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
