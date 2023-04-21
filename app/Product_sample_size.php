<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_sample_size extends Model
{
    public function product_sample()
    {
    	return $this->belongsTo(Product_sample::class);
    }

    public function size()
    {
    	return $this->belongsTo(Size::class);
    }
}
