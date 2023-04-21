<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function client()
    {
    	return $this->belongsTo(Client::class);
    }

    public function order_lines()
    {
    	return $this->hasMany(Order_line::class);
    }
}
