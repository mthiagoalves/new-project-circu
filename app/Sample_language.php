<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_language extends Model
{
    public function sample()
    {
    	return $this->belongsTo(Sample::class);
    }

    public function language()
    {
    	return $this->belongsTo(Language::class);
    }
}
