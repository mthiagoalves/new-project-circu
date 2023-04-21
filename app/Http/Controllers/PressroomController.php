<?php

namespace App\Http\Controllers;

use App\Models\Meta_datas;
use Illuminate\Http\Request;

//Repositories
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CollectionRepository;
use App\Repositories\PressRepository;

class PressroomController extends Controller
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

	public function getHomepage(){

    	$all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProducts();

        $pressreleases = PressRepository::getLatestPressRelease();

        foreach($categories as $category):
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product):
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name):
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;

        $meta_data = Meta_datas::where('page_name', '=', 'Press')->first();

    	return view('pressroom.homepage',compact('all_products','pressreleases', 'meta_data'));
    }

    public function getAllProducts(){

        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProducts();

        foreach($categories as $category):
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product):
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name):
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;

        return view('pressroom.products',compact('all_products'));
    }


    public function getProduct($product) {

        $product = ProductRepository::getProduct($product);
        return view('pressroom.product',compact('product'));
    }

    public function getMagicalAmbiences() {

        $ambiences = PressRepository::getMagicalAmbiences();
        return view('pressroom.magical-ambiences',compact('ambiences'));
    }

    public function getAmbiences() {

        $ambiences = PressRepository::getAmbiences();
        return view('pressroom.ambiences',compact('ambiences'));
    }

    public function getAllPressReleases() {

        $pressreleases = PressRepository::getAllPressReleases();
        return view('pressroom.press-releases',compact('pressreleases'));
    }

    public function getPressReleaseSingle($slug){

        $pressrelease = PressRepository::getPressRelease($slug);
        return view('pressroom.press-release',compact('pressrelease'));
    }

    public function getAllPressClipping() {

        $pressclipping = PressRepository::getAllPressClipping();
        return view('pressroom.all-press-clipping',compact('pressclipping'));
    }

    public function getPressClippingSingle($slug){

        $pressclipping = PressRepository::getPressClipping($slug);

        return view('pressroom.press-clipping',compact('pressclipping'));
    }

    public function getCollection($collection) {

        $collection = PressRepository::getCollection($collection);
        return view('pressroom.collection',compact('collection'));
    }

    public function getAbout(){
        
        return view('pressroom.about');
    }

    public function getTradeshows(){
        
        return view('pressroom.tradeshows');
    }

    protected function guard()
    {
        return Auth::guard('user');
    }

    public function getProjects(){

        return view('pressroom.projects');
    }
}
