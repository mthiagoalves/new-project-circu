<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_option extends Model
{
    public $timestamps = false;
    
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function option()
    {
    	return $this->belongsTo(Option::class);
    }

    public function order_lines()
    {
    	return $this->belongsTo(Order_line::class);
    }
}
