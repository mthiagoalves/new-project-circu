<?php

namespace App;

use App\Models\project_products;
use App\Models\Projects_products;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function sub_category()
    {
        return $this->belongsTo(Sub_category::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }

    public function product_languages()
    {
        return $this->hasMany(Product_language::class);
    }

    public function similar()
    {
        return $this->hasOne(Similar::class, 'id');
    }

    public function product_similars()
    {
        return $this->hasMany(Product_similar::class);
    }

    public function product_matches()
    {
        return $this->hasMany(Product_match::class);
    }

    public function product_shop()
    {
        return $this->hasOne(Product_shop::class, 'id');
    }

    public function video()
    {
        return $this->hasOne(Video::class, 'id');
    }

    public function product_videos()
    {
        return $this->hasMany(Product_video::class);
    }

    public function article_products()
    {
        return $this->hasMany(Article_product::class);
    }

    public function product_samples()
    {
        return $this->hasMany(Product_sample::class);
    }

    public function projects_products()
    {
        return $this->hasMany(Projects_products::class);
    }

    public function collection_products()
    {
        return $this->hasMany(Collection_product::class);
    }

    public function whish_lists()
    {
        return $this->hasMany(Wish_list::class);
    }

    public function Order_lines()
    {
        return $this->hasMany(Order_line::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    public function product_options()
    {
        return $this->hasMany(Product_option::class);
    }

    public function product_currencies()
    {
        return $this->hasMany(Product_currency::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function related_product_projects()
    {
        return $this->hasMany(Related_product_projects::class);
    }
}
