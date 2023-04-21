<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection_language extends Model
{
    public function language()
    {
    	return $this->belongsTo(Language::class);
    }

    public function collection()
    {
    	return $this->belongsTo(Collection::class);
    }
}
