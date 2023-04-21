<?php

namespace App\Models;

use App\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects_products extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function product()
    {
    	return $this->hasMany(Product::class);
    }
}
