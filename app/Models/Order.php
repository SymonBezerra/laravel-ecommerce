<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'grand_total',
        'payment_method',
        'payment_status',
        'status',
        'currency',
        'shipping_amount',
        'shipping_method',
        'notes'
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    function address()
    {
        return $this->hasOne(Address::class);
    }
}
