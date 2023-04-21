<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_shop extends Model
{
	protected $table = 'product_shop';

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
