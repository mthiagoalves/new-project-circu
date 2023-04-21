<?php

namespace App\Repositories;

use App\Http\Requests;

//Facades
use Illuminate\Support\Facades\DB;

//Models
use App\Article;
use App\Collection;

use Validator;

class TrendsRepository
{
	// public static function getAllTrends()
	// {
	// 	return Article::with([
	// 		'article_languages' => function ($query) {
	// 			$query->where('language_id', '=', 1);
	// 		},
	// 		'article_products.product' => function ($query) {
	// 			$query->with([
	// 				'sub_category.sub_category_languages' => function ($query) {
	// 					$query->where('language_id', 1);
	// 				}
	// 			])
	// 				->where('products.is_active', '=', true)
	// 				->where('products.is_deleted', '=', false);
	// 		}
	// 	])->where('article_type_id', '=', 8)
	// 		->where('is_active', '=', true)
	// 		->where('is_deleted', '=', false)
	// 		->orderBy('published_at', 'DESC')->get();
	// }

	public static function getAllTrends()
	{
		return Article::with([
			'article_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			},
			'article_products.product' => function ($query) {
				$query->with([
					'sub_category.sub_category_languages' => function ($query) {
						$query->where('language_id', 1);
					}
				]);
			}
		])->where('article_type_id', '=', 8)
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->orderBy('published_at', 'DESC')->get();
	}
	public static function getMoodboard($moodboard)
	{
		return Article::where('article_type_id', '=', 8)
			->where('slug', 'like', $moodboard)
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->get();
	}
}
