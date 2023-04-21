<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Related_product_finishes extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
