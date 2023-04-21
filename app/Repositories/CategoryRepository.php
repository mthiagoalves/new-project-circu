<?php

namespace App\Repositories;

use App\Http\Requests;

//Facades
use Illuminate\Support\Facades\DB;

//Models
use App\Category;

use Validator;

class CategoryRepository
{
	public static function getAllCategories()
	{
		return Category::with([
			'category_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			},
			'sub_categories'
		])->orderBy('id', 'ASC')->get();
	}

	public static function getCategory($category)
	{
		// return Category::with([
		// 	'category_languages' => function($query){ 
		// 		$query->where('language_id', '=', 1); 
		// 	},
		// 	'sub_categories.products' => function($query){
		// 		$query->with([
		// 			'sub_category.sub_category_languages' => function($query){ 
		// 				$query->where('language_id', 1); 
		// 		}])
		// 		->where('products.is_active', '=', true)
		// 		->where('products.is_deleted', '=', false); 
		// 	}])
		//           ->where('slug', 'like', $category)
		//           ->first();
		return Category::with([
			'category_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			}
		])
			->where('slug', 'like', $category)
			->first();
	}
}
