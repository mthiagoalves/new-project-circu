<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function product_sample_size()
    {
    	return $this->hasMany(Product_sample_size::class, 'size_id');
    }
}
