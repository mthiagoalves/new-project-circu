<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_language extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function language()
    {
    	return $this->belongsTo(Language::class);
    }
}
