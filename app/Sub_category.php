<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function sub_category_languages()
    {
    	return $this->hasMany(Sub_category_language::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

}
