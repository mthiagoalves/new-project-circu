<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Similar extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class, 'id');
    }

    public function product_similars()
    {
    	return $this->hasMany(Product_similar::class);
    }

    public function product_matches()
    {
    	return $this->hasMany(Product_match::class);
    }
}
