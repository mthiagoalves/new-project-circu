<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish_list extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}
