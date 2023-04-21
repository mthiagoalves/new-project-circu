<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hear_about extends Model
{
    public function clients()
    {
    	return $this->hasMany(Client::class);
    }
}
