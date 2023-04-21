<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_sample_drawer extends Model
{
    public function product_sample()
    {
    	return $this->belongsTo(Product_sample::class);
    }

    public function drawer()
    {
    	return $this->belongsTo(Drawer::class);
    }
}
