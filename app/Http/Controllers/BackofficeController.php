<?php

namespace App\Http\Controllers;

use App\Models\Meta_datas;
use App\Models\Project_products;
use App\Models\Project_type;
use App\Models\Projects;
use App\Models\Projects_languages;
use App\Models\Projects_products;
use App\Product;
use App\Product_currency;
use App\Product_language;
use App\Product_match;
use App\Product_option;
use App\Product_shop;
use App\Product_similar;
use Illuminate\Http\Request;

use App\Repositories\BackofficeRepository;
use App\Similar;
use App\Sub_category;
use File;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class BackofficeController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function getHomepageBackoffice(){
      
      $projects = Projects::pluck('id');

      $products = Product::where('is_active', '=', true)->where('is_deleted', '=', false)->pluck('id');

      $stocklist = Product::whereHas('product_options', function ($query) {
         $query->where('quantity', '!=', 0)
            ->with([
               'option' => function ($query) {
                  $query->where('is_active', 1)->where('is_deleted', 0)->get();
               }
            ]);
      })->pluck('id');
      
    return view('backoffice.homepage', compact('projects', 'products', 'stocklist'));
   }

   public function allInspirations(){

      $search = request('search');
      
      if ($search) {
          $projects = Projects_languages::where([
              ['title', 'like', '%' . $search . '%']
          ])->with(['projects'])
          ->orderBy('id', 'DESC')->get();

      } else {
          $projects = Projects::with([
            'projects_languages'
        ])->orderBy('id', 'DESC')->get();
      }
      
    return view('backoffice.all-inspirations', compact('projects', 'search'));
   }

   public function getNewProject(){

      $project_type = Project_type::all();

      $products = Product::with([
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
			}
		])
			->where('is_active', '=', true)
			->where('is_deleted', '=', false)
         ->orderBy('name', 'ASC')
			->get();

    return view('backoffice.new-project', compact('project_type', 'products'));
   }

   public function createNewProject(Request $request){

      $request->validate([
         'slug' => 'required',
         'category' => 'required',
         'published_at' => 'required | date',
         'is_active' => 'required |boolean',
         'title' => 'required',
         'description' => 'required'

      ]);

      if(Projects::where('slug', request('slug'))->exists()) {

         return back()->with('msg', 'This title already exists')->withInput();

      } else {
         
         $project = Request([
            'slug' => 'slug',
            'category' => 'category',
            'meta_description' => 'meta_description',
            'key_words' => 'key_words',
            'published_at' => 'published_at',
            'is_active' => 'is_active'
         ]);
         
         //save project in DB
         Projects::create($project);

      }

   //    $project_languages = Request([
   //       'title' => 'title',
   //       'sub_title' => 'sub_title',
   //       'description' => 'description'
         
   //    ]);

   //    // save project language in DB
   //    $lastProject = BackofficeRepository::getLastProject();

   //    $projectId = $lastProject->id;

   //    $project_languages['projects_id'] = $projectId;

   //    Projects_languages::create($project_languages);

   //    //save products relashionatips in DB
   //    foreach ($request->get('products') as $product_id) {
   //       $projects_products = new Projects_products();
   //       $projects_products->product_id = $product_id;
   //       $projects_products->projects_id = $projectId;

   //       $projects_products->save();
   //   }

   //    //thumbnail image upload
   //    $path = $request->file('image');

   //    $custom_name_file = $request->slug . '-' . 'thumbnail' . '.jpg';
   //    $folder_thumbnail = 'img/inspirations/thumbnails/' .  $request->slug;
   //    $path->move($folder_thumbnail, $custom_name_file);

   //    //banners upload

   //    $files = $request->file('banner');
   //    $folder_banners = 'img/inspirations/banners/' .  $request->slug;

   //    if(!empty($files)):
   //       $i = 0;
   //       foreach($files as $file):
   //          $i++;
   //          $custom_name_banner = $request->slug . '-' . 'banner' . '-'. $i . '.jpg';
   //          $file->move($folder_banners, $custom_name_banner);
   //       endforeach;
   //    endif;

      return redirect('/dashboard/all-inspirations')->with('msg', 'Project created success!');
   }

   public function uploadImagePost(Request $request) {
      
      if($request->hasFIle('upload')){
         $filenamewithextension = $request->file('upload')->getClientOriginalName();

         $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

         $extension = $request->file('upload')->getClientOriginalExtension();

         $filenametostore = $filename.'.'.$extension;

         $folder_img_article = 'img/inspirations/img-article/';

         $request->file('upload')->move($folder_img_article, $filenametostore);

         $CKEditorFuncNum = $request->input('CKEditorFuncNum');
         $url = asset('img/inspirations/img-article/'.$filenametostore);
         $msg = 'Image successfully uploaded';
         $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

         @header('Content-type: text/html; charset=utf-8');

         echo $re;
      }
   }

   public function uploadImagePost1(Request $request) {
      
      if($request->hasFIle('file')){
         $filenamewithextension = $request->file('file')->getClientOriginalName();

         $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

         $folder_img_article = 'img/inspirations/img-article/';

         $request->file('file')->move($folder_img_article, $filename);

         return response()->json(['location' => "/img/inspirations/img-article/$filename"]);
      }
   }

   public function editProject($id){
      
      $project = Projects::find($id)
      ->with(['projects_languages'])
      ->where('id', '=', $id)
      ->first();

      $project_type = Project_type::all();

      $products = Product::with([
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
			}
		])
      ->where('is_active', '=', true)
      ->where('is_deleted', '=', false)
      ->orderBy('name', 'ASC')
      ->get();

      
      return view ('backoffice.edit-project', compact('project', 'project_type', 'products'));
   }

   public function updateProject( Request $request)
   {
      
      //upload image, *dont save in DB*

      if($request->hasFile('image') && $request->file('image')->isValid()){

         $path = $request->image;
   
         $custom_name_file = $request->slug . '-' . 'thumbnail' . '.jpg';
         
         $folder_thumbnail = 'img/inspirations/thumbnails/' .  $request->slug;
         
         $path->move($folder_thumbnail, $custom_name_file);
         
      }

      //banners upload

      $files = $request->file('banner');
      $folder_banners = 'img/inspirations/banners/' .  $request->slug;
      if(!empty($files)):
         $i = 0;
         foreach($files as $file):
            $i++;
            $custom_name_banner = $request->slug . '-' . 'banner' . '-'. $i . '.jpg';

            $file->move($folder_banners, $custom_name_banner);
            
         endforeach;
      endif;
      
      //request inputs to projects model
      $data_projects = Request([
         'slug' => 'slug',
         'published_at' => 'published_at',
         'meta_description' => 'meta_description',
         'key_workds' => 'key_words',
         'category'=> 'category',
         'is_active' => 'is_active'
      ]);

      //request inputs to projects languages model
      $data_projects_languages = Request([
         'title' => 'title',
         'sub_title' => 'sub_title',
         'description' => 'description'
      ]);

      //save in DB
      Projects_languages::findOrFail($request->id)->update($data_projects_languages);

      Projects::findOrFail($request->id)->update($data_projects);

      return redirect('/dashboard/all-inspirations')->with('msg', 'Project has been updated');
   }

   public function destroyProject($id)
   {
      Projects::findOrFail($id)->delete();

      return redirect('/dashboard/all-inspirations')->with('msg', 'Project has been deleted');
   }

   public function allSeo(){

      $meta_data = Meta_datas::All();

    return view('backoffice.all-seo', compact('meta_data'));
   }

   public function editSeo($id){

      $meta_data = Meta_datas::findOrFail($id);

      return view('backoffice.update-seo', compact('meta_data'));
   }

   public function updateSeo(Request $request, $id){
      
      $request->validate([
         'meta_title' => 'required',
      ]);

      $data_meta_data = Request([
         'meta_title' => 'meta_title',
         'meta_description' => 'meta_description',
         'key_words' => 'key_words'
      ]);

      Meta_datas::findOrFail($id)->update($data_meta_data);
      
      return redirect('/dashboard/seo');
   }

   public function getAllProducts() {

      $search = request('search');
      
      if ($search) {

          $products = Product::where([
            ['name', 'like', '%' . $search . '%']
            ])->with(['sub_category' => function ($query) 
            {
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
                     $query->where('is_active', 1)
                           ->where('is_deleted', 0)
                           ->get();
                  }
               ])->where('is_options', null)->get();
            }
         ])
            ->where('is_active', '=', true)
            ->where('is_deleted', '=', false)
            ->orderBy('id', 'DESC')
            ->get();

      } else {
         $products = Product::with([
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
                     $query->where('is_active', 1)
                           ->where('is_deleted', 0)
                           ->get();
                  }
               ])->where('is_options', null)->get();
            }
         ])
            ->where('is_active', '=', true)
            ->where('is_deleted', '=', false)
            ->orderBy('id', 'DESC')
            ->get();
      }

      
      $stocklist = Product::whereHas('product_options', function ($query) {
				$query->where('quantity', '!=', 0)
					->with([
						'option' => function ($query) {
							$query->where('is_active', 1)->where('is_deleted', 0)->get();
						}
					]);
			})->pluck('id')->toArray();

      return view('backoffice.products', compact('products', 'search', 'stocklist'));
   }

   public function editProduct($id){

      $all_products = Product::with([
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
         }
      ])->where('is_active', '=', true)
      ->where('is_deleted', '=', false)
      ->orderBy('name', 'ASC')
      ->get();

      $product = Product::findOrFail($id);

      $product_languages = Product_language::where('product_id', '=', $id)->first();

      $similars = Similar::findOrFail($id);

      $product_shop = Product_shop::where('product_id', '=', $id)->first();

      $product_currencies = Product_currency::where('product_id', '=', $id)->first();

      $product_match = Product_match::where('similar_id', '=', $id)->get();

      $product_similars = Product_similar::where('similar_id', '=', $id)->get();

      $product_option = Product_option::where('product_id', '=', $id)->first();

      $sub_category = Sub_category::with('sub_category_languages')->get();   

      return view('backoffice.edit-product', compact('product', 'product_languages', 'similars' , 'product_shop', 'product_currencies', 'product_match', 'product_similars', 'product_option', 'sub_category', 'all_products'));

   }
   
   public function stocklistUpdate(Request $request){

      if(Product_option::where('product_id', '=', $request->get('product_id'))->exists()){
         Product_option::where('product_id', '=', $request->get('product_id'))->update(['quantity' => $request->get('stock')]);
      } else {
         $newStock = new Product_option();
         $newStock->quantity = 1;
         $newStock->is_active = 1;
         $newStock->is_deleted = 0;
         $newStock->product_id = $request->get('product_id');
         $newStock->save();
      }

      $product = Product::where('id', $request->get('product_id'))->get();

      return response()->json($product);

   }

   public function activeProduct(Request $request){
      
      Product::where('id', '=', $request->get('product_id'))->update(['is_active' => $request->get('is_active')]);

      $product = Product::where('id', $request->get('product_id'))->get();

      return response()->json($product);

   }

   public function updateProduct(Request $request, $id){

      $stock = $request->get('stock');

      dd($stock);
      $product_option = Product_option::find($id);

      $product_option->quatity = $stock;
      $product_option->save();

      return redirect()->route('backoffice-products1');

   }

   public function stocklist ()
   {
      $stocklist = Product::whereHas('product_options', function ($query) {
         $query->where('quantity', '!=', 0)
            ->with([
               'option' => function ($query) {
                  $query->where('is_active', 1)->where('is_deleted', 0)->get();
               }
            ]);
      })->get();

      return view('backoffice.stocklist', compact('stocklist'));
   }
   
  
}
