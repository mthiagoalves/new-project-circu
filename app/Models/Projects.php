<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $casts = [
        'category' => 'array'
    ];

    protected $guarded = [];

    public function projects_languages()
    {
    	return $this->hasMany(Projects_languages::class);
    }
}
