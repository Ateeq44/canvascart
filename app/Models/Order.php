<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'payment_id',
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'zipcode',
        'payment_method',
        'status',
        'message',
        'tracking_no',
        'order_note',
    ];


    public function order_item()
    {
        return $this->hasMany('App\Models\OrderItem', 'order_id');
    }

}
