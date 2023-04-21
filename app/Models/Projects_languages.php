<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects_languages extends Model
{
    use HasFactory;

    protected $guarded = [];
    

    public function projects()
    {
    	return $this->belongsTo(Projects::class);
    }
}
