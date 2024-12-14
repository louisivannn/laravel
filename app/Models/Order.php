<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name', 'customer_email', 'shipping_address', 
        'total_amount', 'status', 'payment_status', 'refund_status'
    ];

   
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity', 'price');
    }
}