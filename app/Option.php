<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function product_options()
    {
    	return $this->hasMany(Product_option::class);
    }
}
