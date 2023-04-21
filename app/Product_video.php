<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_video extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function video()
    {
    	return $this->belongsTo(Video::class);
    }
}
