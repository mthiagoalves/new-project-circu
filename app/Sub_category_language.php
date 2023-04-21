<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category_language extends Model
{
    public function sub_category()
    {
    	return $this->belongsTo(Sub_category::class);
    }

    public function language()
    {
    	return $this->belongsTo(Language::class);
    }
}
