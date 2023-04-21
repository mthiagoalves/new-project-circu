<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function sub_categories()
    {
    	return $this->hasMany(Sub_category::class);
    }

    public function category_languages()
    {
    	return $this->hasMany(Category_language::class);
    }
}
