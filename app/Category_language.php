<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_language extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function language()
    {
    	return $this->belongsTo(Language::class);
    }
}
