<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_division extends Model
{
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }

    public function division()
    {
    	return $this->belongsTo(Division::class);
    }
}
