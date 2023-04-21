<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function article()
    {
    	return $this->belongsTo(Article::class);
    }
}
