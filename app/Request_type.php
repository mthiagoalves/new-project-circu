<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request_type extends Model
{
    public function requests()
    {
    	return $this->hasMany(Request::class);
    }
}
