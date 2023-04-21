<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    public function product_sample_drawer()
    {
    	return $this->hasMany(Product_sample_drawer::class, 'drawer_id');
    }
}
