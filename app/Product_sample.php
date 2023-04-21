<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_sample extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function sample()
    {
    	return $this->belongsTo(Sample::class);
    }

    public function product_sample_size()
    {
    	return $this->hasMany(Product_sample_size::class);
    }

    public function product_sample_drawer()
    {
    	return $this->hasMany(Product_sample_drawer::class);
    }
}
