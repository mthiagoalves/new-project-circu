<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function article_divisions()
    {
    	return $this->hasMany(Article_division::class);
    }

    public function division_languages()
    {
    	return $this->hasMany(Division_language::class);
    }
}
