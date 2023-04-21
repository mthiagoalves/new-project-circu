<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function article_type()
    {
    	return $this->belongsTo(Article_type::class);
    }

    public function article_languages()
    {
    	return $this->hasMany(Article_language::class);
    }

    public function article_divisions()
    {
    	return $this->hasMany(Article_division::class);
    }

    public function article_products()
    {
    	return $this->hasMany(Article_product::class);
    }

    public function logs()
    {
    	return $this->hasMany(Log::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
