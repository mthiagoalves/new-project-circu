<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_similar extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function similar()
    {
    	return $this->belongsTo(Similar::class);
    }
}
