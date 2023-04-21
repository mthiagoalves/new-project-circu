<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_currency_size extends Model
{
    public function product_sample_size()
    {
    	return $this->belongsTo(Product_sample_size::class);
    }

    public function currency()
    {
    	return $this->belongsTo(Currency::class);
    }
}
