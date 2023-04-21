<?php

namespace App\Repositories;

use App\Http\Requests;

//Facades
use Illuminate\Support\Facades\DB;

//Models
use App\Product;
use App\Sample;
use App\Finish;
use App\Category;
use App\Article_product;
use App\Product_sample;
use App\Related_product_samples;
use App\Size;
use App\Drawer;
use Validator;
use App\Product_sample_size;

class ProductRepository
{

	// nova all products
	public static function getAllProducts()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->orderBy('order', 'DESC')
			->get();
	}

	public static function getAllProductsOurHouses()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				]);
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->inRandomOrder()
			->get();
	}

	public static function getMagicalMonthProducts()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				]);
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['cloud-sofa', 'mermaid-bed', 'fantasy-air-bookcase-limited-edition', 'fantasy-air-chest-3-drawers', 'fantasy-air-nightstand', 'sky-chest-3-drawers', 'illusion-stool-leopard', 'illusion-stool-white-bear', 'illusion-chair-leopard', 'illusion-chair-white-bear', 'magical-mirror-blue'])
			->orderByRaw(DB::raw("FIELD(slug, 'mermaid-bed', 'cloud-sofa', 'illusion-chair-leopard', 'illusion-chair-white-bear', 'illusion-stool-leopard', 'illusion-stool-white-bear', 'sky-chest-3-drawers', 'fantasy-air-nightstand', 'fantasy-air-chest-3-drawers' ,'fantasy-air-bookcase-limited-edition' ,'magical-mirror-blue') ASC"))
			->get();
	}

	public static function getNewProducts()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->where('is_new', '=', true)
			->orderBy('order', 'DESC')
			->get();
	}


	public static function getSample($finish)
	{
		return Sample::where('slug', 'like', $finish)
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->where('show_sample', '=', '1')
			->get();
	}


	public static function getRelatedProductsSamples($finish)
	{
		return Related_product_samples::where('sample_id', '=', $finish[0]->id)
			->where('is_active', 1)
			->get();
	}

	public static function getProduct($product)
	{
		return Product::where('is_active', '=', '1')
			->where('slug', 'like', $product)
			->with([
				'product_languages' => function ($query) {
					$query->where('language_id', '=', 1)
                    ->get();
				},
                'article_products' => function ($query) {
                    $query->where('is_active', '=', 1)
                    ->orderBy('id', 'DESC')
                    ->get();
                },
				'similar' => function ($query) {
					$query->with([
						'product_similars' => function ($query) {
							$query->with(['product' => function ($query) {
								$query->with(['sub_category' => function ($query) {
									$query->with(['sub_category_languages' => function ($query) {
										$query->where('language_id', '=', 1)->get();
									}])->get();
								}])->get();
							}])->take(4)->get();
						},
						'product_matches' => function ($query) {
							$query->with(['product' => function ($query) {
								$query->with(['sub_category' => function ($query) {
									$query->with(['sub_category_languages' => function ($query) {
										$query->where('language_id', '=', 1)->get();
									}])->get();
								}])->get();
							}])->get();
						}
					])->get();
				},
				'product_shop' => function ($query) {
					$query->where('is_active', '=', true)->first();
				},
				'product_videos.video' => function ($query) {
					$query->where('is_active', '=', true)->first();
				}
			])

			// 'article_products.product' => function($query){
			// 		$query->with([
			// 			'sub_category.sub_category_languages' => function($query){
			// 				$query->where('language_id', 1);
			// 		}])
			// 		->where('products.is_active', '=', true)
			// 		->where('products.is_deleted', '=', false);
			// 	}])

			// 'product_videos' => function($query){
			// 	$query->with(['video' => function($query){
			// 		$query->where('is_active', '=', '1')->get();
			// 	}])->get();
			// }])

			->first();
	}

	public static function getProductTest($product)
	{
		return Product::where('is_active', '=', '1')
			->where('slug', 'like', $product)
			->with([
				'product_languages' => function ($query) {
					$query->where('language_id', '=', 1)->get();
				},
				'similar' => function ($query) {
					$query->with([
						'product_similars' => function ($query) {
							$query->with(['product' => function ($query) {
								$query->with(['sub_category' => function ($query) {
									$query->with(['sub_category_languages' => function ($query) {
										$query->where('language_id', '=', 1)->get();
									}])->get();
								}])->get();
							}])->take(4)->get();
						},
						'product_matches' => function ($query) {
							$query->with(['product' => function ($query) {
								$query->with(['sub_category' => function ($query) {
									$query->with(['sub_category_languages' => function ($query) {
										$query->where('language_id', '=', 1)->get();
									}])->get();
								}])->get();
							}])->get();
						}
					])->get();
				},
				'product_shop' => function ($query) {
					$query->where('is_active', '=', true)->first();
				},
				'product_videos.video' => function ($query) {
					$query->where('is_active', '=', true)->first();
				}
			])

			// 'article_products.product' => function($query){
			// 		$query->with([
			// 			'sub_category.sub_category_languages' => function($query){
			// 				$query->where('language_id', 1);
			// 		}])
			// 		->where('products.is_active', '=', true)
			// 		->where('products.is_deleted', '=', false);
			// 	}])

			// 'product_videos' => function($query){
			// 	$query->with(['video' => function($query){
			// 		$query->where('is_active', '=', '1')->get();
			// 	}])->get();
			// }])

			->first();
	}

	public static function getProductsInStock()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1)->get();
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1)->get();
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->whereHas('product_options', function ($query) {
				$query->where('quantity', '!=', 0)
					->with([
						'option' => function ($query) {
							$query->where('is_active', 1)->where('is_deleted', 0)->get();
						}
					]);
			})
			->orderBy('order', 'DESC')
			->get();
	}

	public static function getStockOffProduct()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1)->get();
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1)->get();
							}
						]);
					}
				]);
			}
		])
			->whereHas('product_options', function ($query) {
				$query->where('quantity', '!=', 0)
					->with([
						'option' => function ($query) {
							$query->where('is_active', 1)->where('is_deleted', 0)->get();
						}
					]);
			})
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->orderBy('order', 'DESC')
			->get();
	}

	public static function getMultipleProducts($products_event)
	{
		$products = Product::find($products_event);
		return $products;
	}

	public static function searchProduct($term)
	{
		$result = array();

		$productsResults = Product::where('is_deleted', '<>', '1')->where('is_active', '=', '1')->where('key_words', 'like', '%' . $term . '%')->orderBy('sub_category_id', 'ASC')->get();

		foreach ($productsResults as $product) {
			array_push($result, array('label' => ucwords(str_replace('-', ' ', $product->slug)), 'category' => strtoupper(str_replace('-', ' ', $product->sub_category->slug)), 'img' => '/img/products/carousel/' . $product->slug . '-circu-magical-furniture.jpg', 'href' => '/products/' . $product->slug));
		}

		return $result;
	}

	public static function getProductsByKeyword($search_term)
	{

		$products = Category::with([
			'sub_categories.sub_category_languages' => function ($query) {
				$query->where('language_id', 1)->get();
			},
			'sub_categories.products' => function ($query) use ($search_term) {
				$query->where('is_deleted', '=', false)
					->where('key_words', 'like', '%' . $search_term . '%')
					->where('is_active', '=', true)
					->orderBy('order', 'ASC')
					->with([
						'product_languages' => function ($query) {
							$query->where('language_id', 1)->get();
						},
						'product_options' => function ($query) {
							$query->where('option_id', '<>', '10')->get();
						}
					])->get();
			}
		])
			->get();

		return $products;
	}
	public static function getProductsByKeywordSamples($search_terms)
	{
		$search_term = $search_terms;
		$samples = Sample::where('key_words', 'like', '%' . $search_term . '%')
			->where('show_sample', '=', '1')
			->orderBy('order_samples', 'ASC')
			->get();

		return $samples;
	}


	public static function searchProductPage($term)
	{
		$productsResults = Product::where('is_active', '=', '1')
			->where('key_words', 'like', '%' . $term . '%')
			->orderBy('sub_category_id', 'ASC')
			->with('sub_category.category')
			->get();

		return $productsResults;
	}

	public static function getProductSamples($product)
	{
		return Sample::whereHas('product_samples', function ($query) use ($product) {
			$query->where('product_id', '=', $product->id)->where('is_options', null);
		})->get();
	}


	public static function getProductSizes($product)
	{
		return Size::with(['product_sample_size' => function($query) use ($product){
			$query->join('product_samples', 'product_sample_sizes.product_sample_id', '=', 'product_samples.id')
				  ->join('products', 'product_samples.product_id', '=', 'products.id')
				  ->where('products.id', $product->id)
				  ->get();}])
				  ->get();

	}
	public static function getProductSizesAvailable($product)
	{
		return Size::with(['product_sample_size' => function($query) use ($product){
			$query->join('product_samples', 'product_sample_sizes.product_sample_id', '=', 'product_samples.id')
				  ->join('products', 'product_samples.product_id', '=', 'products.id')
				  ->where('products.id', $product->id)
				  ->get();}])
				  ->first();
	}


	public static function getProductDrawers($product)
	{
		return Drawer::with(['product_sample_drawer' => function($query) use ($product){
			$query->join('product_samples', 'product_sample_drawers.product_sample_id', '=', 'product_samples.id')
				  ->join('products', 'product_samples.product_id', '=', 'products.id')
				  ->where('products.id', $product->id)
				  ->get();}])
				  ->get();

	}

	public static function getProductSamplesOptions($product)
	{
		return Sample::whereHas('product_samples', function ($query) use ($product) {
			$query->where('product_id', '=', $product->id)->where('is_options', null);
		})->get();
	}


	public static function getSamples()
	{
		return Sample::where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->get();
	}

	public static function getFinishes()
	{
		return Finish::with([
			'finish_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->get();
	}

	public static function getSamplesPagFinishesNew()
	{
		return Sample::where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->where('show_sample', '=', '1')
			->orderBy('order_samples', 'ASC')
			->get();
	}

	public static function getFinishesPagFinishesNew()
	{
		return Finish::with([
			'finish_languages' => function ($query) {
				$query->where('language_id', '=', 1);
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->orderByRaw("FIELD(id, '4','5','3','2','1','6') ASC")
			->get();
	}

	public static function getRelatedProducProject($product)
	{
		return Article_product::where('product_id', '=', $product->id)
			->where('is_active', 1)
			->get();
	}


	public static function getProductsDeals1()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['cloud-lamp-big', 'sky-chest-3-drawers', 'fantasy-air-chest-6-drawers', 'cloud-chest-6-drawers', 'hoot-stool', 'animal-stool-bird', 'animal-stool-shark', 'cloud-stool-puff', 'cloud-sofa', 'booboo-swing', 'magical-mirror-blue', 'chameleon-pink-mirror', 'mermaid-bed', 'little-cloud-nightstand', 'cloud-nightstand', 'fantasy-air-nightstand', 'fantasy-air-bookcase-limited-edition', 'dream-desk','cloud-bed', 'dainty-armchair'])
			// ->orderByRaw(DB::raw("FIELD(slug, 'cloud-lamp-big', 'sky-chest-3-drawers','fantasy-air-chest-6-drawers', 'cloud-chest-6-drawers', 'hoot-stool','animal-stool-bird','animal-stool-shark', 'cloud-stool-puff', 'cloud-sofa','booboo-swing', 'magical-mirror-blue', 'chameleon-pink-mirror', 'mermaid-bed', 'little-cloud-nightstand', 'cloud-nightstand', 'fantasy-air-nightstand', 'fantasy-air-bookcase-limited-edition', 'dream-desk','cloud-bed', 'dainty-armchair') ASC"))
			->get();
	}

	public static function getProductsDeals2()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['mr-bunny-bed', 'cloud-lamp-big', 'cloud-nightstand', 'chameleon-mirror', 'fantasy-air-chest-6-drawers', 'pixie-chair', 'cloud-shelf-small', 'dino-bed'])
			// ->orderByRaw(DB::raw("FIELD(slug, 'mr-bunny-bed', 'cloud-lamp-big', 'cloud-nightstand', 'chameleon-mirror', 'fantasy-air-chest-6-drawers', 'pixie-chair', 'cloud-shelf-small', 'dino-bed') ASC"))
			->get();
	}

	public static function getProductsShowCase()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['fantasy-air-chest-6-drawers', 'cloud-nightstand', 'mr-bunny-bed', 'animal-stool-bird', 'cloud-lamp-small', 'cloud-lamp-big', 'cloud-shelf-small', 'cloud-rug', 'diana-table-lamp', 'bubble-loop', 'bubble-gum-desk', 'mogli-playhouse-gym', 'periwinkle-suspension-lamp', 'pixie-office-chair', 'lotus-armchair', 'atomic-suspension-lamp'])
			->orderByRaw(DB::raw("FIELD(slug, 'lotus-armchair', 'mr-bunny-bed','diana-table-lamp', 'bubble-loop', 'cloud-shelf-small',  'bubble-gum-desk', 'pixie-office-chair', 'cloud-nightstand', 'fantasy-air-chest-6-drawers', 'cloud-lamp-big', 'mogli-playhouse-gym', 'periwinkle-suspension-lamp', 'animal-stool-bird', 'cloud-lamp-small',  'cloud-rug', 'atomic-suspension-lamp') ASC"))
			->get();
	}
	public static function getNewProductsIsaloni()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('id', ['356', '339', '353', '336', '340', '354','344', '345','346','343','342','350', '348','338','349','241','141','142','54','243','167','168','166','300','144','302','304'])
			->orderByRaw(DB::raw("FIELD(id, '356', '353','339', '336','354', '54', '344', '345','346','343','342', '350', '348','338','340','349','241','141','142','243','167','168','166','300','144','302','304') ASC"))
			->get();
	}
	public static function getProductsPricelist()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['mr-bunny-bed', 'cloud-lamp-big', 'bubble-gum-gym', 'rocky-rocket', 'bun-van', 'fantasy-air-nightstand', 'magical-mirror', 'cloud-rug'])
			// ->orderByRaw(DB::raw("FIELD(slug, 'mr-bunny-bed', 'cloud-lamp-big','bubble-gum-gym', 'rocky-rocket', 'bun-van','fantasy-air-nightstand','magical-mirror', 'cloud-rug') ASC"))
			->get();
	}

	public static function getProductsContact()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['vixey-bed', 'lotus-armchair', 'cloud-cradle', 'cuddle-rocking-chair'])
			// ->orderByRaw(DB::raw("FIELD(slug, 'vixey-bed', 'lotus-armchair', 'cloud-cradle', 'cuddle-rocking-chair') ASC"))
			->get();
	}


	public static function getProductsThankYouPages()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['chameleon-pink-mirror','merida-bed', 'lotus-sofa', 'merida-corner-bed',])
			->orderByRaw(DB::raw("FIELD(slug, 'merida-bed', 'lotus-sofa', 'merida-corner-bed','chameleon-pink-mirror') ASC"))
			->get();
	}

	public static function getProductsProjects()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['lotus-sofa', 'merida-bed', 'tristen-bed', 'merida-corner-bed'])
			->orderByRaw(DB::raw("FIELD(slug, 'merida-bed', 'tristen-bed', 'lotus-sofa','merida-corner-bed') ASC"))
			->get();
	}


	public static function getProductsMidCentury()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['merida-bed', 'lotus-sofa', 'merida-corner-bed', 'cloud-cradle', 'cuddle-rocking-chair', 'lotus-armchair', 'lewis-chaise-longue','bun-van', 'cloud-lamp-small','cloud-nightstand','mr-bunny-bed','bubble-gum-gym', 'bubble-gum-dressing-table','letter-b-graphic-collection','dainty-armchair'])
			->orderByRaw(DB::raw("FIELD(slug, 'merida-bed', 'lotus-sofa', 'merida-corner-bed', 'cloud-cradle', 'cuddle-rocking-chair', 'lotus-armchair', 'lewis-chaise-longue','bun-van', 'cloud-lamp-small','cloud-nightstand','mr-bunny-bed', 'bubble-gum-gym','bubble-gum-dressing-table','letter-b-graphic-collection','dainty-armchair') ASC"))
			->get();
	}

	public static function getProductsModernContemporary()
	{
		return Product::with([
			'sub_category' => function ($query) {
				$query->with([
					'sub_category_languages' => function ($query) {
						$query->where('language_id', '=', 1);
					},
					'category' => function ($query) {
						$query->with([
							'category_languages' => function ($query) {
								$query->where('language_id', '=', 1);
							}
						]);
					}
				]);
			},
			'product_samples' => function ($query) {
				$query->with([
					'sample' => function ($query) {
						$query->where('is_active', 1)->where('is_deleted', 0)->get();
					}
				])->where('is_options', null)->get();
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
			->whereIn('slug', ['merida-bed', 'lotus-sofa', 'merida-corner-bed', 'vixey-bed', 'lewis-armchair', 'lewis-two-seat-sofa', 'lewis-chaise-longue', 'fantasy-air-balloon', 'cloud-bed','cloud-lamp-small','fantasy-air-nightstand','bubble-gum-gym', 'puzzled-bookcase-desk','magical-mirror-blue','mr-bunny-bed'])
			->orderByRaw(DB::raw("FIELD(slug, 'vixey-bed', 'merida-bed', 'merida-corner-bed', 'lotus-sofa', 'lewis-armchair', 'lewis-two-seat-sofa', 'lewis-chaise-longue', 'fantasy-air-balloon', 'cloud-bed','cloud-lamp-small','fantasy-air-nightstand', 'bubble-gum-gym','puzzled-bookcase-desk','magical-mirror-blue','mr-bunny-bed') ASC"))
			->get();
	}
}
