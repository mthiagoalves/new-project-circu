<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_currency extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function currency()
    {
    	return $this->belongsTo(Currency::class);
    }
}
