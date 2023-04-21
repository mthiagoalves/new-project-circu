<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finish_language extends Model
{
    public function finish()
    {
    	return $this->belongsTo(Finish::class);
    }

    public function language()
    {
    	return $this->belongsTo(Language::class);
    }
}
