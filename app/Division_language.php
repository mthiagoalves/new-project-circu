<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division_language extends Model
{
    public function division()
    {
    	return $this->belongsTo(Division::class);
    }

    public function language()
    {
    	return $this->belongsTo(Language::class);
    }
}
