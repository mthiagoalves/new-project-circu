<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function request_type()
    {
    	return $this->belongsTo(Request_type::class);
    }

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
