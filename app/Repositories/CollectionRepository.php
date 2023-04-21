<?php

namespace App\Repositories;

use App\Http\Requests;

//Facades
use Illuminate\Support\Facades\DB;

//Models
use App\Collection;

use Validator;

class CollectionRepository
{
	public static function getCollection($collection)
	{
		return Collection::with([
			'collection_languages' => function($query){ 
				$query->where('language_id', '=', 1); 
			}, 
			'collection_products.product' => function($query){
				$query->with([
					'sub_category.sub_category_languages' => function($query){ 
						$query->where('language_id', 1); 
				}])
				->where('products.is_active', '=', true)
				->where('products.is_deleted', '=', false); 
			}])
            ->where('slug', 'like', $collection)
            ->first();
	}
}