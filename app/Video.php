<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function video()
    {
    	return $this->hasOne(Video::class, 'id');
    }

    public function product_videos()
    {
    	return $this->hasMany(Product_video::class);
    }
}
