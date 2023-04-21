<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_language extends Model
{
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }

    public function language()
    {
    	return $this->belongsTo(Language::class);
    }
}
