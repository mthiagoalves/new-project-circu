<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_type extends Model
{
    public function articles()
    {
    	return $this->hasMany(Article::class);
    }
}
