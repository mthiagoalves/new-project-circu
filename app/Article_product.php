<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_product extends Model
{
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
