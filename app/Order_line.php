<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_line extends Model
{
    public function Order()
    {
    	return $this->belongsTo(Order::class);
    }

    public function product_option()
    {
    	return $this->belongsTo(Product_option::class);
    }
}
