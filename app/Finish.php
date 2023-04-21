<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finish extends Model
{
    public function samples()
    {
    	return $this->hasMany(Sample::class);
    }

    public function finish_languages()
    {
    	return $this->hasMany(Finish_language::class);
    }
}
