<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function category_languages()
    {
    	return $this->hasMany(Category_language::class);
    }

    public function sub_category_languages()
    {
    	return $this->hasMany(Sub_category_languages::class);
    }

    public function collection_languages()
    {
    	return $this->hasMany(Collection_language::class);
    }

    public function article_languages()
    {
    	return $this->hasMany(Article_language::class);
    }

    public function finish_languages()
    {
    	return $this->hasMany(Finish_language::class);
    }

    public function sample_languages()
    {
    	return $this->hasMany(Sample_language::class);
    }

    public function division_languages()
    {
    	return $this->hasMany(Division_language::class);
    }

    public function product_languages()
    {
    	return $this->hasMany(Product_language::class);
    }
}
