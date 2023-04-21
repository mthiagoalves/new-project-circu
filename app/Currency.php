<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function clients()
    {
    	return $this->hasMany(Client::class);
    }

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
