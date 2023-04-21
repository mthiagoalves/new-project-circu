<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Related_product_projects extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
