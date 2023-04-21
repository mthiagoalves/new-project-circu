<?php

namespace App\Repositories;

use App\Http\Requests;

//Facades
use Illuminate\Support\Facades\DB;

//Models
use App\Article;
use App\Collection;

use Validator;

class PressRepository
{
	public static function getAllPressClipping()
	{
		return Article::with([
			'article_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			}
		])->where('article_type_id', '=', 5)
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->orderBy('id', 'DESC')->get();
	}

	public static function getPressClipping($slug)
	{
		return Article::where('is_active', '=', '1')
			->where('slug', 'like', $slug)
			->with([
				'article_languages' => function ($query) {
					$query->where('language_id', '=', 1)->get();
				},
				'article_products' => function ($query) {
					$query->with(['product' => function ($query) {
						$query->with(['sub_category' => function ($query) {
							$query->with(['sub_category_languages' => function ($query) {
								$query->where('language_id', '=', 1)->get();
							}])->get();
						}])->get();
					}])->get();
				}
			])
			->first();
	}

	public static function getAllPressReleases()
	{
		return Article::with([
			'article_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			}
		])->where('article_type_id', '=', 4)
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->orderBy('id', 'DESC')->get();
	}

	public static function getPressRelease($slug)
	{
		return Article::where('is_active', '=', '1')
			->where('slug', 'like', $slug)
			->with([
				'article_languages' => function ($query) {
					$query->where('language_id', '=', 1)->get();
				},
				'article_products.product' => function ($query) {
					$query->with([
						'sub_category.sub_category_languages' => function ($query) {
							$query->where('language_id', 1);
						}
					])
						->where('products.is_active', '=', true)
						->where('products.is_deleted', '=', false);
				}
			])
			->first();
	}

	public static function getLatestPressRelease()
	{
		return Article::with([
			'article_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			}
		])->where('article_type_id', '=', 4)
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->take(4)
			->orderBy('id', 'DESC')->get();
	}

	public static function getAllProjects()
	{
		return Article::with([
			'article_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			}
		])->where('article_type_id', '=', 3)
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->orderBy('id', 'DESC')->get();
	}

	public static function getProject($slug)
	{
		return Article::where('is_active', '=', '1')
			->where('article_type_id', '=', 3)
			->where('slug', 'like', $slug)
			->with([
				'article_languages' => function ($query) {
					$query->where('language_id', '=', 1)->get();
				},
				'article_products.product' => function ($query) {
					$query->with([
						'sub_category.sub_category_languages' => function ($query) {
							$query->where('language_id', 1);
						}
					])
						->where('products.is_active', '=', true)
						->where('products.is_deleted', '=', false);
				}
			])
			->first();
	}

	public static function getMagicalAmbiences()
	{
		return Article::with([
			'article_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			}
		])->where('article_type_id', '=', 2)
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->orderBy('id', 'DESC')->get();
	}

	public static function getAmbiences()
	{
		return Article::with([
			'article_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			}
		])->where('article_type_id', '=', 1)
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->orderBy('id', 'DESC')->get();
	}

	public static function getCollection($collection)
	{
		return Collection::with([
			'collection_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			},
			'collection_products.product' => function ($query) {
				$query->with([
					'sub_category.sub_category_languages' => function ($query) {
						$query->where('language_id', 1);
					}
				])
					->where('products.is_active', '=', true)
					->where('products.is_deleted', '=', false);
			}
		])
			->where('slug', 'like', $collection)
			->first();
	}

	public static function getProductPressReleases($product_slug)
	{
		dd($product_id);
		return Article::where('article_type_id', '=', 4)
			->whereHas('article_products', function ($query) {
				$query->where('product.id', $product_id);
			})->exists();

		// return Article::where('is_active', '=', '1')
		// ->where('article_type_id', '=', 4)
		// ->with([
		// 	'article_products.product' => function($query){ 
		// 		$query->where('product.slug', 'like', $product_slug)->get();
		// }])
		// ->with([
		// 	'article_languages' => function($query){ 
		// 		$query->where('language_id', '=', 1)->get(); 
		// }])
		// ->take(4)
		// ->get(); 
	}

	public static function getEbook($ebook)
	{
		return Article::where('is_active', '=', '1')
			->where('article_type_id', '=', 6)
			->where('slug', 'like', $ebook)
			->with([
				'article_languages' => function ($query) {
					$query->where('language_id', '=', 1)->get();
				}
			])
			->orderBy('id', 'DESC')
			->first();
	}

	public static function getAllEbooksExcept($ebook)
	{
		return Article::where('is_active', '=', '1')
			->where('is_deleted', '=', '0')
			->where('article_type_id', '=', 6)
			// ->where('slug', '!=', $ebook)
			->with([
				'article_languages' => function ($query) {
					$query->where('language_id', '=', 1)->get();
				}
			])
			->orderBy('published_at', 'DESC')
			->get();
	}
}
