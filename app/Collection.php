<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function collection_products()
    {
    	return $this->hasMany(Collection_product::class);
    }

    public function collection_languages()
    {
    	return $this->hasMany(Collection_language::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
