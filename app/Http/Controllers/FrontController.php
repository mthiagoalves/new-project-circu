<?php

namespace App\Http\Controllers;

use App\Models\Meta_datas;
use App\Models\Projects;
use App\Models\Projects_products;
use App\Product;
use Illuminate\Http\Request;

//Repositories
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CollectionRepository;
use App\Repositories\PressRepository;
use App\Repositories\TrendsRepository;
use App\Repositories\EbooksRepository;


class FrontController extends Controller
{

    public function getHomepage()
    {

        $meta_data = Meta_datas::where('page_name', '=', 'Homepage')->first();

        return view('frontend.homepage', compact('meta_data'));
    }

    public function getDeals()
    {
        $products = ProductRepository::getAllProducts();
        $products1 = ProductRepository::getProductsDeals1();
        $products2 = ProductRepository::getProductsDeals2();

        $meta_data = Meta_datas::where('page_name', '=', 'Deals')->first();

        return view('frontend.deals', compact('products', 'products1', 'products2', 'meta_data'));
    }

    public function getIsaloni()
    {
        $products_showcase = ProductRepository::getProductsShowCase();
        $products_newproducts = ProductRepository::getNewProductsIsaloni();
        $products = ProductRepository::getAllProducts();
        return view('frontend.isaloni-milan', compact('products', 'products_showcase', 'products_newproducts'));
    }

    public function getTrendsNew()
    {
        $modboards = TrendsRepository::getAllTrends();
        $products = ProductRepository::getProductsDeals1();
        return view('frontend.trends', compact('products', 'modboards'));
    }

    public function getModernLuxuryNew()
    {
        $products = ProductRepository::getProductsModernContemporary();
        return view('frontend.modern-luxury-new', compact('products'));
    }

    public function getMidCenturyNew()
    {
        $products = ProductRepository::getProductsMidCentury();
        return view('frontend.mid-century-new', compact('products'));
    }

    public function getMagicalWeek()
    {
        $products = ProductRepository::getMagicalMonthProducts();
        return view('frontend.magical-week', compact('products'));
    }

    public function getAllProducts()
    {
        $best_sellers_arr = array(11, 2, 1, 143, 101, 4, 32, 30);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProducts();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;

        $meta_data = Meta_datas::where('page_name', '=', 'All Products')->first();

        return view('frontend.products', compact('all_products', 'category', 'best_sellers', 'meta_data'));
    }

    public function getProduct($product_slug)
    {
        $best_sellers_arr = array(11, 2, 1, 4, 7, 20, 32, 30);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $product = ProductRepository::getProduct($product_slug);

        $product_sample_size = ProductRepository::getProduct($product_slug);
        $instock = ProductRepository::getProductsInStock();

        $samples = ProductRepository::getProductSamples($product);

        $sizes = ProductRepository::getProductSizes($product);
        $sizes_available = ProductRepository::getProductSizesAvailable($product);

        $drawers = ProductRepository::getProductDrawers($product);

        $samples_options = ProductRepository::getProductSamples($product);

        $related_product_project = ProductRepository::getRelatedProducProject($product);
        if (empty($product)) {
            return view('errors.404');
        }
        if($product_slug == 'bubble-gum-bed' || $product_slug == 'mushroom-pendant' || $product_slug == 'mr-bunny-bed' || $product_slug == 'cloud-bed' || $product_slug == 'tristen-bed' || $product_slug == 'dino-bed' || $product_slug == 'mr-bunny-bed' || $product_slug == 'sky-tv-cabinet' || $product_slug == 'bubble-gum-desk' || $product_slug == 'mogli-playhouse-bed' || $product_slug == 'mogli-playhouse-gym'|| $product_slug == 'bubble-gum-dressing-table' || $product_slug == 'merida-bed' || $product_slug == 'merida-corner-bed'){
            return view('frontend.product-test', compact('product', 'instock', 'samples', 'sizes', 'drawers' , 'best_sellers', 'related_product_project', 'samples_options'));
        }
        return view('frontend.product', compact('product', 'instock', 'samples', 'sizes', 'drawers' , 'best_sellers', 'related_product_project', 'samples_options'));
    }

    public function getProductTest($product_slug)
    {
        $best_sellers_arr = array(11, 2, 1, 4, 7, 20, 32, 30);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $product = ProductRepository::getProductTest($product_slug);

        $product_sample_size = ProductRepository::getProductTest($product_slug);

        $instock = ProductRepository::getProductsInStock();

        $samples = ProductRepository::getProductSamples($product);

        $sizes = ProductRepository::getProductSizes($product);

        $sizes_available = ProductRepository::getProductSizesAvailable($product);

        $drawers = ProductRepository::getProductDrawers($product);

        $samples_options = ProductRepository::getProductSamples($product);

        //$samples_options = ProductRepository::getProductSamplesOptions($product);

        $related_product_project = ProductRepository::getRelatedProducProject($product);

        if (empty($product)) {
            return view('errors.404');
        }

        return view('frontend.product-test1', compact('product', 'instock', 'samples', 'sizes', 'drawers' , 'best_sellers', 'related_product_project', 'samples_options', 'sizes_available', 'product_sample_size'));
    }

    public function getFinishes()
    {
        $all_finishes = array();
        $samples = ProductRepository::getSamples();
        $finishes = ProductRepository::getFinishes();

        foreach ($finishes as $finish) :
            $all_finishes += array($finish->finish_languages[0]->name  => array());
            foreach ($samples as $sample) :
                if ($sample->finish_id == $finish->id) :
                    array_push($all_finishes[$finish->finish_languages[0]->name], $sample);
                endif;
            endforeach;
        endforeach;

        return view('frontend.finishes', compact('all_finishes'));
    }

    public function getFinishesNew()
    {
        $all_finishes = array();
        $samples = ProductRepository::getSamplesPagFinishesNew();
        $finishes = ProductRepository::getFinishesPagFinishesNew();

        foreach ($finishes as $finish) :
            $all_finishes += array($finish->finish_languages[0]->name  => array());
            foreach ($samples as $sample) :
                if ($sample->finish_id == $finish->id) :
                    array_push($all_finishes[$finish->finish_languages[0]->name], $sample);
                endif;
            endforeach;
        endforeach;

        $meta_data = Meta_datas::where('page_name', '=', 'Finishes')->first();

        return view('frontend.finishes-new', compact('all_finishes', 'meta_data'));
    }

    public function getCollection($collection)
    {
        $collection = CollectionRepository::getCollection($collection);
        return view('frontend.collection', compact('collection'));
    }

    public function getNewProducts()
    {

        $best_sellers_arr = array(2, 32, 4, 11);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $newproducts = ProductRepository::getNewProducts();

        $ids = [1, 5, 4, 2, 6, 3, 7, 9, 8];

        $sorted = $categories->sortBy(function ($categories) use ($ids) {
            return array_search($categories->getKey(), $ids);
        });

        foreach ($sorted as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($newproducts as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;

        $meta_data = Meta_datas::where('page_name', '=', 'New Products')->first();

        return view('frontend.new-products', compact('all_products', 'best_sellers', 'meta_data'));
    }

    public function getNewProductsTest()
    {

        $best_sellers_arr = array(2, 32, 4, 11);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $newproducts = ProductRepository::getNewProducts();

        $ids = [1, 5, 4, 2, 6, 3, 7, 9, 8];

        $sorted = $categories->sortBy(function ($categories) use ($ids) {
            return array_search($categories->getKey(), $ids);
        });

        foreach ($sorted as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($newproducts as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;

        return view('frontend.new-products-test', compact('all_products', 'best_sellers'));
    }

    public function getCategory($cat)
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProducts();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;

        $meta_data = Meta_datas::whereIn('page_name', ['Beds', 'Seating', 'Lighting', 'Storage', 'Play & Learn', 'Mirrors', 'Rugs', 'Hardware', 'Others'])
        ->orderBy('id', 'ASC')
        ->get();

        return view('frontend.category', compact('all_products', 'category', 'cat', 'meta_data'));
    }

    public function Allproducts_initial()
    {
        $best_sellers_arr = array(11, 2, 1, 4, 7, 20, 32, 30);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProducts();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('includes.all-products-initial', compact('all_products', 'category', 'instock', 'best_sellers'));
    }

    public function getStock()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;

        $meta_data = Meta_datas::where('page_name', '=', 'Stocklist')->first();

        return view('frontend.stocklist', compact('all_products', 'category', 'meta_data'));
    }

    public function getIdServices()
    {
        return view('frontend.id-services');
    }

    public function getOurHouses()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProducts();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.our-houses', compact('all_products', 'category', 'instock', 'best_sellers'));
    }

    public function getOurHousesNew()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProducts();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.our-houses-new', compact('all_products', 'category', 'instock'));
    }

    public function getAccessOurHousesNew()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProducts();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.access-our-houses-new', compact('all_products', 'category', 'instock', 'best_sellers'));
    }

    public function getOurHousesBoyRoom()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.boy-room', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesGirlRoom()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.girl-room', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesSpaceman()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.goodnight-spaceman', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesJungleFun()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.jungle-fun', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesMagicalRoom()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.blossom-fairytale', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesOuterSpaceMission()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.an-outer-space-mission', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesUnderseaAdventure()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.an-undersea-adventure-by-bymura', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesCandyland()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.candyland-playroom', compact('all_products', 'category', 'instock'));
    }


    public function getOurHousesDreamhouseAdventures()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.dreamhouse-adventures-bedroom', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesRoomAboveClouds()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.a-room-above-the-clouds', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesRoomGreenMint()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.green-mint-playroom', compact('all_products', 'category', 'instock'));
    }

    public function getOurHousesRoomTheMultiverseBedroom()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.the-multiverse-bedroom', compact('all_products', 'category', 'instock'));
    }

    public function getCircuNewShowroom()
    {
        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $products = ProductRepository::getAllProductsOurHouses();
        $instock = ProductRepository::getProductsInStock();

        foreach ($categories as $category) :
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('our-houses.circu-new-showroom', compact('all_products', 'category', 'instock'));
    }

    public function getRAourhouses()
    {
        return view('mail.auto-reply.our-houses-boy-room');
    }

    public function getContact()
    {
        return view('frontend.contact');
    }

    public function getContactNew()
    {
        $products = ProductRepository::getProductsContact();

        $meta_data = Meta_datas::where('page_name', '=', 'Contact Us')->first();

        return view('frontend.contact-new', compact('products', 'meta_data'));
    }


    public function getAbout()
    {
        return view('frontend.about');
    }

    public function getAboutNew()
    {
        $meta_data = Meta_datas::where('page_name', '=', 'About Us')->first();

        return view('frontend.about-new', compact('meta_data'));
    }

    public function getCatalogue()
    {
        $best_sellers_arr = array(353, 356, 354, 142);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $slug = "catalogue-circu-magical-furniture";
        $ebook = PressRepository::getEbook($slug);

        $ebooks = PressRepository::getAllEbooksExcept($slug);

        $meta_data = Meta_datas::where('page_name', '=', 'Homepage')->first();

        return view('frontend.catalogue', compact('ebook', 'ebooks', 'best_sellers', 'meta_data'));
    }

    public function getCatalogueTest()
    {
        $best_sellers_arr = array(334, 142, 35, 11);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $slug = "catalogue-circu-magical-furniture";
        $ebook = PressRepository::getEbook($slug);

        $ebooks = PressRepository::getAllEbooksExcept($slug);
        return view('frontend.catalogue-test', compact('ebook', 'ebooks', 'best_sellers'));
    }

    public function getLandingEbook($ebook)
    {
        $best_sellers_arr = array(2, 32, 4, 11);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $slug = $ebook;
        $ebook = PressRepository::getEbook($slug);

        $ebooks = PressRepository::getAllEbooksExcept($slug);
        return view('frontend.landing-ebook', compact('ebook', 'ebooks', 'best_sellers'));
    }

    public function getLandingEbookPress($ebook)
    {
        $best_sellers_arr = array(2, 32, 4, 11);
        $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

        $slug = $ebook;
        $ebook = PressRepository::getEbook($slug);

        $ebooks = PressRepository::getAllEbooksExcept($slug);
        return view('frontend.landing-ebook-press', compact('ebook', 'ebooks', 'best_sellers'));
    }

    public function getInspirationsCatalogue()
    {
        return view('frontend.catalogue-inspirations');
    }

    public function getPricelist()
    {
        return view('frontend.pricelist');
    }

    public function getPricelistNew()
    {
        $products = ProductRepository::getProductsPricelist();

        $meta_data = Meta_datas::where('page_name', '=', 'Pricelist')->first();

        return view('frontend.pricelist-new', compact('products', 'meta_data'));
    }

    public function getShowrooms()
    {
        $products_event = array(7, 11, 12, 15, 29, 30, 57, 43);

        $products = ProductRepository::getMultipleProducts($products_event);
        return view('frontend.showrooms', compact('products'));
    }

    public function getLandingParents()
    {
        $meta_data = Meta_datas::where('page_name', '=', 'Parents Rooms')->first();

        return view('frontend.landing-parents', compact('meta-data'));
    }

    public function getTest()
    {
        // $products = ProductRepository::getAllProducts();
        // $projects = PressRepository::getAllProjects();
        // $products1 = ProductRepository::getProductsProjects();
        return view('frontend.test');
    }

    public function getLandingClassic()
    {
        $products = ProductRepository::getAllProducts();
        return view('frontend.landing-classic', compact('products'));
    }

    public function getLandingMidCentury()
    {
        $products = ProductRepository::getAllProducts();
        return view('frontend.landing-midcentury', compact('products'));
    }

    public function getEventLanding($year, $event)
    {
        if ($event == "apr-salone-del-mobile-italy-2018") {
            $products_event = array(2, 7, 10, 28, 29, 30, 31, 39, 16, 17, 19, 20, 22, 40, 41, 42, 32, 33, 11, 12, 43, 38, 14, 15);
        }
        if ($event == "set-decorex-uk-2018") {
            $products_event = array(11, 12, 31, 41, 42, 43);
        }
        if ($event == "jan-maison-et-objet-paris-2019") {
            $products_event = array(7, 39, 1, 41, 40, 42, 20, 19, 17, 16, 11, 12, 31, 37, 22, 32, 34, 15, 14, 13, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67);
        }
        if ($event == "april-salone-del-mobile-italy-2019") {
            $products_event = array(54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 14, 11, 12, 36, 16, 17, 19, 20, 22, 40, 41, 42, 31, 32, 7, 29, 30, 66, 67, 15, 34, 39, 1);
        }
        if ($event == "jan-maison-et-objet-paris-2020") {
            $products_event = array(5, 1, 69, 11, 12, 34, 35, 39, 40, 41, 42, 36, 13, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64);
        }
        if ($event == "virtual-tradeshow") {
            $products_event = array(12, 14, 28, 32, 34, 36, 40, 41, 42, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 66, 67);
        } else {
            $products_event = array(11, 12, 31, 41, 42, 43);
        }

        $products = ProductRepository::getMultipleProducts($products_event);

        return view('frontend.events.' . $year . '.' . $event, compact('products'));
    }

    public function getHalloween()
    {
        $products_event = array(10, 12, 37, 38);

        $products = ProductRepository::getMultipleProducts($products_event);

        return view('frontend.events.2018.halloween-discount-2018', compact('products'));
    }

    public function getLandingCarnival()
    {
        $products_event = array(1, 11, 12, 15, 23, 30);

        $products = ProductRepository::getMultipleProducts($products_event);

        return view('frontend.landing-carnival', compact('products'));
    }

    public function getPressHome()
    {

        $pressclipping = PressRepository::getAllPressClipping();

        $pressreleases = PressRepository::getLatestPressRelease();

        return view('frontend.press', compact('pressclipping', 'pressreleases'));
    }

    public function getPressHome2()
    {

        $pressclipping = PressRepository::getAllPressClipping();

        $pressreleases = PressRepository::getLatestPressRelease();

        $meta_data = Meta_datas::where('page_name', '=', 'Press')->first();

        return view('frontend.press-test', compact('pressclipping', 'pressreleases', 'meta_data'));
    }

    public function getBackofficeLogin()
    {

        return view('frontend.backoffice-login');
    }

    public function getPressClippingSingle($slug)
    {

        $pressclipping = PressRepository::getPressClipping($slug);

        return view('frontend.press-clipping', compact('pressclipping'));
    }

    public function getPressReleaseSingle($slug)
    {

        $pressrelease = PressRepository::getPressRelease($slug);

        return view('frontend.press-release', compact('pressrelease'));
    }

    public function getProjects()
    {

        $projects = PressRepository::getAllProjects();
        $products1 = ProductRepository::getProductsProjects();
        return view('frontend.projects', compact('projects', 'products1'));
    }

    public function getProjectSingle($slug)
    {

        $project = PressRepository::getProject($slug);

        return view('frontend.project', compact('project'));
    }

    public function getModalEbooksCatalogues($ebook)
    {
        $ebook = EbooksRepository::getEbook($ebook);
        return view('includes.modal-download-ebooks', compact('ebook'));
    }

    public function getModalSearch()
    {
        return view('includes.search');
    }

    public function getModalDownloadMoodboard($moodboard)
    {
        $moodboard = TrendsRepository::getMoodboard($moodboard);
        return view('includes.modal-download-moodboard', compact('moodboard'));
    }

    public function getModalFinishInfo($finish)
    {
        $finish = ProductRepository::getSample($finish);
        $related_samples_products = ProductRepository::getRelatedProductsSamples($finish);

        return view('includes.modal-finish-info', compact('finish', 'related_samples_products'));
    }

    public function getModalDiscountXmas()
    {
        return view('includes.modal-discount-xmas');
    }


    public function getModalProductPrice($product)
    {
        $product = ProductRepository::getProduct($product);
        return view('includes.modal-product-price', compact('product'));
    }

    public function getModalProductPriceMagicalMonth($product)
    {
        $product = ProductRepository::getProduct($product);
        return view('includes.modal-product-price-magical-month', compact('product'));
    }

    public function getModalProductPriceGumChair()
    {
        return view('includes.modal-product-price-gum-chair');
    }

    public function getModalDownloadStory()
    {
        return view('includes.modal-download-history');
    }

    public function getModalSubscribe()
    {
        return view('includes.modal-subscribe');
    }

    public function getModalContact()
    {
        return view('includes.modal-contact');
    }

    public function getModalDownloadCatalogo()
    {
        return view('includes.modal-download-catalogo-2023');
    }

    public function getModalProductOrder($product)
    {

        $product = ProductRepository::getProduct($product);
        return view('includes.modal-product-order', compact('product'));
    }

    public function getModalCampaignPrice($product)
    {

        $product = ProductRepository::getProduct($product);
        return view('includes.modal-campaign-price', compact('product'));
    }

    public function getModalPressRelease($slug)
    {

        $pressrelease = PressRepository::getPressRelease($slug);
        return view('includes.modal-press-release', compact('pressrelease'));
    }

    public function getModalProductInfo($product)
    {

        $product = ProductRepository::getProduct($product);
        return view('includes.modal-product-info', compact('product'));
    }

    public function getModalProductCostumize($product)
    {

        $product = ProductRepository::getProduct($product);
        return view('includes.modal-product-costumize', compact('product'));
    }

    public function getModalProduct3D($product)
    {

        $product = ProductRepository::getProduct($product);
        return view('includes.modal-3d-product', compact('product'));
    }

    public function getModalProductSheet($product)
    {

        $product = ProductRepository::getProduct($product);
        return view('includes.modal-product-sheet', compact('product'));
    }

    public function getModalProductPreview($name)
    {
        return view('includes.modal-product-preview', compact('name'));
    }

    public function getModalNewTest()
    {
        return view('includes.modal-new-test');
    }

    public function getModalDiscountDeals()
    {
        return view('includes.modal-discount-deals-test');
    }

    public function getModalIdService()
    {
        return view('includes.modal-choose-pack');
    }

    public function getModalWeChat()
    {
        return view('includes.modal-we-chat');
    }

    public function getModalOurHouses()
    {
        return view('our-houses.modal-our-house');
    }

    public function getModalOurHousesDownloadPricelist()
    {
        return view('our-houses.modal-download-pricelist');
    }

    public function getModalProjectPrice()
    {
        return view('our-houses.modal-get-price-project');
    }

    public function getModalProjectPriceBlossom()
    {
        return view('our-houses.modal-get-price-project-blossom');
    }

    public function getModalProjectPriceOuterSpaceMission()
    {
        return view('our-houses.modal-get-price-project-outer-space-mission');
    }
    public function getModalProjectPriceUnderseaAdventure()
    {
        return view('our-houses.modal-get-price-project-undersea-adventure');
    }

    public function getModalProjectPriceCandyland()
    {
        return view('our-houses.modal-get-project-price-candyland');
    }

    public function getModalProjectPriceDreamhouse()
    {
        return view('our-houses.modal-get-project-price-dreamhouse');
    }

    public function getModalProjectPriceRoomAboveClouds()
    {
        return view('our-houses.modal-get-project-price-room-above-the-clouds');
    }

    public function getModalProjectPriceRoomGreenMint()
    {
        return view('our-houses.modal-get-project-price-room-green-mint-playroom');
    }

    public function getModalProjectPriceJungleFun()
    {
        return view('our-houses.modal-get-price-project-jungle-fun');
    }

    public function getModalOurHousesDownloadEbook()
    {
        return view('our-houses.modal-download-ebook');
    }

    public function getModalOurHousesDownloadHrImagesBoy()
    {
        return view('our-houses.modal-download-hr-images-boy');
    }

    public function getModalOurHousesDownloadHrImagesGirl()
    {
        return view('our-houses.modal-download-hr-images-girl');
    }

    public function getModalEntranceDeals()
    {
        return view('includes.modal-entrance-deals');
    }

    public function getModalRequestCuppon()
    {
        return view('includes.modal-request-cuppon');
    }

    public function getModalRequestCupponBedroom1()
    {
        return view('includes.modal-request-cuppon-bedroom-1');
    }

    public function getModalRequestCupponBedroom2()
    {
        return view('includes.modal-request-cuppon-bedroom-2');
    }

    public function getModalRequestCupponBedroom3()
    {
        return view('includes.modal-request-cuppon-bedroom-3');
    }

    public function getModalDownloadStocklist()
    {
        return view('includes.modal-download-stocklist');
    }

    public function getModalDownloadPricelist()
    {
        return view('includes.modal-download-pricelist');
    }

    public function getModalRequestPrice()
    {
        return view('includes.modal-request-price');
    }

    public function getModalEbook($ebook)
    {
        return view('includes.modal-ebook', compact('ebook'));
    }

    public function getModalHRImages($slug)
    {
        return view('includes.modal-hr-images', compact('slug'));
    }

    public function getModalBookAMeeting($event)
    {
        return view('includes.modal-book-meeting', compact('event'));
    }

    public function getModalBookMeeting()
    {
        return view('includes.modal-book-a-meeting');
    }

    public function getModalDownloadsPopup($downloads)
    {
        return view('includes.modal-downloads-popup');
    }

    public function getModalPopup()
    {
        return view('includes.modal-popup');
    }

    public function getModalPopupExit()
    {
        return view('includes.modal-p-exit');
    }

    public function getModalPopupExitOurHouses()
    {
        return view('includes.modal-popup-our-magical-rooms');
    }

    public function getPrivacyPolicy()
    {
        return view('frontend.privacy-policy');
    }


    public function getFreshSummerSales()
    {

        $products_arr = array(4, 5, 8, 10, 42, 39, 6, 11, 12, 28, 9, 34, 15, 66);

        $products = ProductRepository::getMultipleProducts($products_arr);

        return view('frontend.campaign-summer-sales', compact('products'));
    }

    public function getLandingNewProducts()
    {

        $products_arr = array(75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85);

        $products_graphic = ProductRepository::getMultipleProducts($products_arr);

        return view('frontend.landing-newProducts', compact('products_graphic'));
    }

    // public function Allproducts_initial()
    // {
    //     $best_sellers_arr = array(11, 2, 1, 4, 7, 20, 32, 30);
    //     $best_sellers = ProductRepository::getMultipleProducts($best_sellers_arr);

    //     $all_products = array();
    //     $categories = CategoryRepository::getAllCategories();
    //     $products = ProductRepository::getAllProducts();
    //     $instock = ProductRepository::getProductsInStock();

    //     foreach ($categories as $category) :
    //         $all_products += array($category->category_languages[0]->name => array());
    //         foreach ($products as $product) :
    //             if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name) :
    //                 array_push($all_products[$category->category_languages[0]->name], $product);
    //             endif;
    //         endforeach;
    //     endforeach;
    //     return view('includes.all-products-initial', compact('all_products', 'category', 'instock', 'best_sellers'));
    // }


    //Thank you pages

    public function ThankYouPageDownload3d()
    {
        return view('includes.thank-you.download-3d');
    }

    public function ThankYouPageCatalogue()
    {
        return view('includes.thank-you.catalogue');
    }

    public function ThankYouPageGetprice()
    {
        return view('includes.thank-you.get-price');
    }

    public function ThankYouPageGetpriceMagicalMonth()
    {
        return view('includes.thank-you.get-price-magical-month');
    }

    public function ThankYouPageInfo()
    {
        return view('includes.thank-you.info');
    }

    public function ThankYouPageBookMeeting()
    {
        return view('includes.thank-you.book-meeting');
    }

    public function ThankYouPageInspbook()
    {
        return view('includes.thank-you.inspiration-book');
    }

    public function ThankYouPageNewsletter()
    {
        return view('includes.thank-you.newsletter');
    }

    public function ThankYouPagePricelist()
    {
        return view('includes.thank-you.pricelist');
    }
    public function ThankYouPageNewCatalogue()
    {
        return view('includes.thank-you.pricelist');
    }

    public function ThankYouPageNewEbookOurHouses()
    {
        return view('includes.thank-you.ebook-our-houses');
    }

    public function ThankYouPagePricelisOurHouses()
    {
        return view('includes.thank-you.pricelist-our-houses');
    }

    public function ThankYouPageNewEbook()
    {
        return view('includes.thank-you.pricelist');
    }

    public function ActionsError()
    {
        return view('includes.thank-you.error');
    }

    public function ActionsError500()
    {
        return view('errors.500');
    }

    public function ActionsError404()
    {
        return view('errors.404');
    }

    public function ActionsDownloadPressRelease()
    {
        return view('includes.thank-you.download-press-release');
    }

    public function ActionsPocketNewProducts()
    {
        return view('includes.thank-you.download-pocket-new-products');
    }

    public function ThankYouPageProductSheet()
    {
        return view('includes.thank-you.download-product-sheet');
    }

    public function ThankYouPageProductPressRelease()
    {
        return view('includes.thank-you.download-product-press-release', compact('product'));
    }
    public function ThankYouPageRequestCuppon()
    {
        return view('includes.thank-you.request-cuppon');
    }

    public function ThankYouPageDownloadStocklist()
    {
        return view('includes.thank-you.download-stocklist');
    }

    public function ThankYouPageContact()
    {
        return view('includes.thank-you-new.contact');
    }

    public function ThankYouPageSubscribe()
    {
        return view('includes.thank-you-new.subscribe');
    }

    public function ThankYouPageEbook()
    {
        return view('includes.thank-you-new.ebook');
    }

    public function ThankYouPageCatalog()
    {
        return view('includes.thank-you-new.catalogue');
    }

    public function ThankYouPagePriceResquest()
    {
        return view('includes.thank-you-new.price-request');
    }

    public function ThankYouPagePriceGentInfo()
    {
        return view('includes.thank-you-new.get-info');
    }

    public function ThankYouPageSpecRequest()
    {
        return view('includes.thank-you-new.request-spec');
    }

    // End thank you pages

    // repostas automaticas

    public function AutoReplyMoodboard($moodboard)
    {

        $moodboard = TrendsRepository::getMoodboard($moodboard);
        return view('mail.auto-reply.moodboard', compact('moodboard'));
    }

    public function getAutoResponseProduct($product_slug, $currency)
    {
        $product = ProductRepository::getProduct($product_slug);
        $request['country'] = $currency;
        return view('mail.auto-reply.product-price', compact('product', 'request'));
    }

    public function AutoReplySubscribe()
    {
        return view('mail.auto-reply.subscribe');
    }

    public function AutoReplyPricelist($currency)
    {
        $request['country'] = $currency;
        return view('mail.auto-reply.pricelist', compact('request'));
    }

    public function AutoReplyStocklist()
    {
        return view('mail.auto-reply.stocklist');
    }

    public function AutoReplyInfo()
    {
        return view('mail.auto-reply.info');
    }

    // public function AutoReplyAnnualSale()
    // {
    //     return view('mail.auto-reply.annual-sale');
    // }

    public function AutoReplyAnnualSale()
    {
        return view('mail.auto-reply.annual-sale-stocklist');
    }

    public function AutoReplySpringSale()
    {
        return view('mail.auto-reply.spring-sale');
    }

    public function AutoReplyIsaloni()
    {
        return view('mail.auto-reply.isaloni');
    }

    public function AutoReplyDiscountXmas()
    {
        return view('mail.auto-reply.discount-xmas');
    }

    public function AutoReplyCatalogue($slug)
    {
        // $slug = "catalogue-circu-magical-furniture";
        $ebook = PressRepository::getEbook($slug);
        $request['product_slug'] = $slug;
        return view('mail.auto-reply.catalogue', compact('request'));
    }

    public function AutoReplyEbook($slug)
    {
        // $slug = "catalogue-circu-magical-furniture";
        $ebook = PressRepository::getEbook($slug);
        $request['product_slug'] = $slug;
        return view('mail.auto-reply.ebook', compact('request'));
    }

    public function AutoReplyPress($slug)
    {
        // $slug = "catalogue-circu-magical-furniture";
        $press = PressRepository::getPressRelease($slug);
        $request['fair_name'] = $slug;
        return view('mail.auto-reply.press-release', compact('request'));
    }

    public function AutoReplyPressRegister()
    {
        return view('mail.auto-reply.press');
    }

    public function ThankYouProducts()
    {
        $products = ProductRepository::getProductsThankYouPages();
        return view('includes.thank-you-new.products', compact('products'));
    }

    public function AutoReply3dFile($product_slug)
    {
        $product = ProductRepository::getProduct($product_slug);
        return view('mail.auto-reply.product-3d', compact('product'));
    }

    public function AutoReplyProductSheet($product_slug)
    {
        $product = ProductRepository::getProduct($product_slug);
        return view('mail.auto-reply.product-sheet', compact('product'));
    }

    public function AutoReplyCostum($product_slug)
    {
        $product = ProductRepository::getProduct($product_slug);
        return view('mail.auto-reply.product-costum', compact('product'));
    }

    public function AutoReplyProductInfo($product_slug)
    {
        $product = ProductRepository::getProduct($product_slug);
        return view('mail.auto-reply.product-info', compact('product'));
    }
     public function backofficeLogin(){

      return view ('backoffice.sign-in');
   }

   //Client Section

   public function showAllInspirations(Request $request){

    $projects = Projects::with([
       'projects_languages'
    ])
    ->where('is_active', '=', '1')
    ->orderBy('id', 'DESC')
    ->get();

    $db_ext = \DB::connection('mysql_external');

    $posts_wordpress = $db_ext->table('wp_inspirationsposts')
    ->where('post_status', '=', 'publish')
    ->select('id', 'post_title', 'post_content', 'post_name')
    ->orderBy('post_date', 'desc')
    ->paginate(12);

    foreach($posts_wordpress as $key => $posts_id){

       $thumbnails[] = $db_ext->table('wp_inspirationspostmeta')
    //    ->where('meta_key', '=', '_thumbnail_id')
       ->where('post_id', '=', $posts_id->id)
       ->orderBy('post_id', 'desc')
       ->take(10)
       ->get();
    //    ->pluck('meta_value')
    //    ->first();
    }

    dd($thumbnails);

    foreach($thumbnails as $key => $thumbnail) {

       $posts_wordpress[$key]->thumbnail  = $db_ext->table('wp_inspirationsposts')
       ->where('id', '=', $thumbnail)
       ->orderBy('post_date', 'desc')
       ->pluck('guid')->first();

    }

    $post = '';
    if ($request->ajax()) {
          foreach ($posts_wordpress as $posts) {

             $post.= '<div class="col-12 col-md-3 float-left p-1 content-main ">
                         <div class="col-12 p-0 receive-size">
                            <a href="#">
                               <img src="'.$posts->thumbnail.'" class="img-fluid receive-img-size" style="object-fit: cover;object-position:center;width:100%" alt="'.$posts->post_title.'">
                            </a>
                            <div class="content-overlay">
                               <a href="/inspirations/'.$posts->post_name.'/old">
                                  <h3 class="title-article">'.$posts->post_title.'</h3>
                               </a>
                               <div class="content-details">
                                  <a href="/inspirations/'.$posts->post_name.'/old">
                                     <i class="fa fa-eye" aria-hidden="true"></i>
                                     <p>KNOW MORE</p>
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>';
                   }
                   return $post;
                }

                $meta_data = Meta_datas::where('page_name', '=', 'Inspirations')->first();

                return view ('frontend.all-projects', compact('projects', 'posts_wordpress', 'meta_data'));
             }

 public function showProjectClient($slug){

    $project = Projects::with(['projects_languages'])
    ->where('slug', '=', $slug)
    ->first();

    $project_products = Projects_products::where(
       'projects_id', '=', $project->id
    )->pluck('product_id');

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
    ->where('is_active', '=', 1)
    ->where('is_deleted', '=', 0)
    ->whereIn('id', $project_products)
    ->get();

    $prevInspirationId = Projects::with('projects_languages')->where('is_active', '=', 1)->where('id', '<', $project->id)->max('id');
    $nextInspirationId = Projects::with('projects_languages')->where('is_active', '=', 1)->where('id', '>', $project->id)->min('id');

    $prevInspiration = Projects::with('projects_languages')->where('is_active', '=', 1)->where('id', '=', $prevInspirationId)->first();
    $nextInspiration = Projects::with('projects_languages')->where('is_active', '=', 1)->where('id', '=', $nextInspirationId)->first();


    if(empty($prevInspiration)){
       $prevInspiration = Projects::with('projects_languages')->where('is_active', '=', 1)->where('id', '=', '1')->first();
    }
    if(empty($nextInspiration)){
       $nextInspiration = Projects::with('projects_languages')->where('is_active', '=', 1)->where('id', '=', '2')->first();
    }

    return view ('inspirations.single-inspiration', compact('project', 'products', 'nextInspiration', 'prevInspiration'));
 }
 public function showProjectClientWordpress($slug){

    $db_ext = \DB::connection('mysql_external');

    $post = $db_ext->table('wp_inspirationsposts')
    ->where('post_status', '=', 'publish')
    ->where('post_name', '=', $slug)
    ->select('id', 'post_title', 'post_content', 'post_name')
    ->first();

    return view ('inspirations.single-inspiration-wordpress', compact('post'));
 }

 public function getBoyRoomCategory(){

    $projects = Projects::with([
       'projects_languages'
    ])
    ->where('category', 'like', '%' . "Boy Room" . '%')
    ->where('is_active', '=', '1')
    ->orderBy('id', 'DESC')
    ->get();

    return view('inspirations.boy-room-projects', compact('projects'));
 }

 public function getGirlRoomCategory(){

    $projects = Projects::with([
       'projects_languages'
    ])
    ->where('category', 'like', '%' . "Girl Room" . '%')
    ->where('is_active', '=', '1')
    ->orderBy('id', 'DESC')
    ->get();

    return view('inspirations.girl-room-projects', compact('projects'));
 }
 public function getStudyAreaCategory(){

    $projects = Projects::with([
       'projects_languages'
    ])
    ->where('category', 'like', '%' . "Study Area" . '%')
    ->where('is_active', '=', '1')
    ->orderBy('id', 'DESC')
    ->get();

    return view('inspirations.study-area-projects', compact('projects'));
 }
 public function getPlayRoomCategory(){

    $projects = Projects::with([
       'projects_languages'
    ])
    ->where('category', 'like', '%' . "Play Room" . '%')
    ->where('is_active', '=', '1')
    ->orderBy('id', 'DESC')
    ->get();

    return view('inspirations.play-room-projects', compact('projects'));
 }
 public function geLivingRoomCategory(){

    $projects = Projects::with([
       'projects_languages'
    ])
    ->where('category', 'like', '%' . "Living Room" . '%')
    ->where('is_active', '=', '1')
    ->orderBy('id', 'DESC')
    ->get();

    return view('inspirations.living-room-projects', compact('projects'));
 }
 public function getNurseryRoomCategory(){

    $projects = Projects::with([
       'projects_languages'
    ])
    ->where('category', 'like', '%' . "Nursery Room" . '%')
    ->where('is_active', '=', '1')
    ->orderBy('id', 'DESC')
    ->get();

    return view('inspirations.nursery-room-projects', compact('projects'));
 }

 public function getArchitectureCategory(){

    $projects = Projects::with([
       'projects_languages'
    ])
    ->where('category', 'like', '%' . "Architecture" . '%')
    ->where('is_active', '=', '1')
    ->orderBy('id', 'DESC')
    ->get();

    return view('inspirations.architecture-projects', compact('projects'));
 }

 public function getLifestyleCategory(){

    $projects = Projects::with([
       'projects_languages'
    ])
    ->where('category', 'like', '%' . "Lifestyle" . '%')
    ->where('is_active', '=', '1')
    ->orderBy('id', 'DESC')
    ->get();

    return view('inspirations.lifestyle-projects', compact('projects'));
 }

}
