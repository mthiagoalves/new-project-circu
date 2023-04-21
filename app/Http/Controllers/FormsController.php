<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;


use GuzzleHttp\Client;

use App\User_level;
use App\User;

use App\Repositories\TrendsRepository;
use App\Repositories\ProductRepository;
use App\Repositories\PressRepository;

use App\Mail\ProductPrice;
use App\Mail\ProductOrder;
use App\Mail\Product3DFile;
use App\Mail\ProductInfo;
use App\Mail\ProductSheet;
use App\Mail\ProductPressRelease;
use App\Mail\Pricelist;
use App\Mail\Catalogue;
use App\Mail\Catalogue2021;
use App\Mail\CatalogueInspirations;
use App\Mail\Subscribe;
use App\Mail\SubscribeFooter;
use App\Mail\Contact;
use App\Mail\BookMeeting;
use App\Mail\BookMeetingFair;
use App\Mail\Pressroom;
use App\Mail\PressroomLogin;
use App\Mail\Ebook;
use App\Mail\ProductCustomization;
use App\Mail\ProductMoodboard;
use App\Mail\Campaign;
use App\Mail\HRImages;
use App\Mail\Deals;
use App\Mail\Cuppon;
use App\Mail\Stocklist;
use App\Mail\EbookOurHouses;
use App\Mail\EbookNew;

use App\Jobs\SendEmailJob;
use App\Jobs\ProductPriceJob;
use App\Jobs\Product3dJob;
use App\Jobs\ProductOrderJob;
use App\Jobs\ProductCustomJob;
use App\Jobs\ProductSheetJob;
use App\Jobs\EbookJob;
use App\Jobs\CatalogueJob;
use App\Jobs\PricelistJob;
use App\Jobs\PricelistShowroomJob;
use App\Jobs\StocklistJob;
use App\Jobs\SpringSaleJob;
use App\Jobs\SpringSaleNewJob;
use App\Jobs\AutoResponseJob;
use App\Jobs\NewProductsJob;
use App\Jobs\AutoResponseJob1;
use App\Jobs\IsaloniJob;
use App\Jobs\PressReleaseJob;
use App\Jobs\PressRegisterJob;
use App\Jobs\Brand\CatalogueJobBrand;
use App\Jobs\Brand\ProductPriceJobBrand;
use App\Jobs\Brand\Product3dJobBrand;
use App\Jobs\Brand\ProductCostumJobBrand;
use App\Jobs\Brand\ProductSheetJobBrand;
use App\Jobs\Brand\PricelistJobBrand;
use App\Jobs\Brand\ContactJobBrand;
use App\Jobs\Brand\DownloadsEmail;


use Carbon\Carbon;


class FormsController extends Controller
{
    
    public function VTIsaloni(Request $request){

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'phone' => '',
            'company' => 'required'
        ]);

        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'phone'           => $request->get('phone'),
                'company'         => $request->get('company'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('more_info'),
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Catalogue',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', '',  $request->get('more_info'), $request->get('more_info'));

            $product_name = str_replace('-', ' ', $request->get('product_name'));
            
            if ($response == true) {
                dispatch(new EbookJob($request->all(), $product_name));
                
                return redirect('https://www.circu.net/virtual-tour/salone-del-mobile-milano-april-2022/');
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }
    public function catalogue(Request $request){

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'phone' => '',
            'occupation' => 'required',
            'company' => 'required'
        ]);
        if ($request->get('product_slug') == 'catalogue-annual-sales') {
            $var_1 = 'StockList';
            $var_2 = 'Circu Annual Sale';
        } elseif ($request->get('product_slug') == 'stocklist-spring-sale') {
            $var_1 = 'Stocklist';
            $var_2 = 'Stocklist Spring Sale';
        } elseif ($request->get('product_slug') == 'summer-sale') {
            $var_1 = 'StockList';
            $var_2 = 'Circu Summer Sale';
            
        } elseif ($request->get('product_slug') == 'lighting-stocklist') {
            $var_1 = 'StockList';
            $var_2 = 'Lighting Stocklist';
            
        } elseif ($request->get('product_slug') == 'best-sellers-stocklist-covet-house') {
            $var_1 = 'StockList';
            $var_2 = 'Best Sellers Stocklist Covet House';
            
        } elseif ($request->get('product_slug') == 'best-deals-stocklist-covet-collection') {
            $var_1 = 'StockList';
            $var_2 = 'Best Sellers Stocklist Covet Collection';
            
        } elseif ($request->get('product_slug') == 'best-sellers-stocklist-caffelatte') {
            $var_1 = 'StockList';
            $var_2 = 'Best Sellers Stocklist Caffe Latte';
            
        } else {
            $var_1 = 'Catalogue';
            $var_2 = 'Brand Catalogue';
        }

        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => $var_1,
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $var_2,
                'interested_name' => $var_2,
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Catalogue',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', $var_1, ' ', $var_2);


            if ($response == true) {

                if($request->get('product_slug') == 'stocklist-spring-sale'){
                    dispatch(new EbookJob($request->all(), $var_2));
                    dispatch(new SpringSaleJob($request->all()));
                } else{
                    dispatch(new CatalogueJob($request->all()));
                    dispatch(new SpringSaleJob($request->all()));
                }

                $name_user = $request->get('name');
                $name_ebook = $request->get('product_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.catalogue', compact('name_user', 'email_user', 'name_ebook', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function BookAMeeting(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'phone' => '',
            'occupation' => 'required',
            'company' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Book a Meeting: ' . $request->get('date') . $request->get('time'),
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', 'Book a Meeting Isaloni', 'Book a Meeting: ' . $request->get('date') . $request->get('time'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Catalogue($request));

                // Mail::send('mail.auto-reply.catalogue', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Our Magical Catalogue Is Here');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. You will receive the catalogue in your email.');
                // return redirect()->route('actions.catalogue');
                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.contact', compact('name_user', 'email_user', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }


    public function ebookRoomsNew(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'phone' => 'nullable|numeric',
            'occupation' => 'required',
            'company' => 'required'
        ]);

        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Downloaded digital content ' . $request->get('product_name'),
                'interested_name' => 'Other',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Catalogue',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Download', ' ', 'Downloaded digital content ' . $request->get('product_name'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Ebook($request));

                // Mail::send('mail.auto-reply.ebook', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | ' . ucwords($request->get('product_name')) . ' Download');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. You will receive the catalogue in your email.');
                // return redirect()->route('actions.catalogue');
                $name_user = $request->get('name');
                $name_ebook = $request->get('product_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.ebook', compact('name_user', 'email_user', 'name_ebook', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function catalogueInspirations(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'phone' => 'nullable|numeric',
            'occupation' => 'required',
            'company' => 'required',
            'city' => 'required',
            'hear_about' => 'required'
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Catalogue',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'cta'             => 'Download Now',
                'interested_name' => 'Inspirations Book',
                'cta_color'       => 'Green',
                'page'            => 'Catalogue',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Catalogue', ' ', 'Inspirations Book');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new CatalogueInspirations($request));

                // Mail::send('mail.auto-reply.inspirations-book', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('As you wish our CataloguE');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. You will receive the catalogue in your email.');
                return redirect()->route('actions.inspirations-book');
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function DownloadMoodboard(Request $request, $moodboard)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $moodboard = TrendsRepository::getMoodboard($moodboard);

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric',
            'hear_about' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('product_name') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('product_name');
            }


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Infographic',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Infographics', 'Moodboards', $details);


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductPrice($request));

                // $product_name = str_replace('-', ' ', $request->get('product_name'));

                // Mail::send('mail.auto-reply.moodboard', ['request' => $request, 'moodboard' => $moodboard, 'product_name' => $product_name], function ($m) use ($request, $product_name) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Download Moodboard');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // return redirect()->route('actions.get-price');
                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.price-request', compact('name_user', 'email_user', 'products'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function DiscountXmas(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $details = 'Popup Discount 15% Cloud Lamps';


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'city'            => $request->get('city'),
                'form'            => 'Price',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'cta'             => 'Get Price',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Price', ' ', $details);


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::send('mail.auto-reply.discount-xmas', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | 15% DISCOUNT ON CLOUD LAMPS');
                // });


                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->to('https://www.circu.net/deals?utm_origem=website&utm_meio=entrypopupe&utm_conteudo=circu-christmas-calendar&utm_campanha=branddeals');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }


    public function ProductPrice(Request $request, $product)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $product = ProductRepository::getProduct($product);
        $currency = checkCurrency($request['country']); 
        if($currency == 2) { 
            $currency = "dollars"; 
            $coin = 2; 
        }elseif($currency == 3) { 
            $currency = "euros"; 
            $coin = 3; 
        } else { 
            $currency = "euros"; 
            $coin = 1; 
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'city' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'hear_about' => 'required'
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('product_name') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('product_name');
            }


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Price',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'cta'             => 'Get Price',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Price', ' ', $details);
            $product_color = $request['product_color'];

            $product_size_slug = $request['product_size_slug'];
            $product_size_price_dollar = $request['product_size_price_dollar'];
            $product_size_price_euro = $request['product_size_price_euro'];

            $product_option_slug = $request['product_option_slug'];
            $product_option_price_dollar = $request['product_option_price_dollar'];
            $product_option_price_euro = $request['product_option_price_euro'];
            $url_converted = $_SERVER['HTTP_REFERER'];
                
            if ($response == true) {

                // if($product->slug == 'carter-desk-lamp' || $product->slug == 'atomic-wall-lamp' || $product->slug == 'atomic-ceiling-suspension-lamp' || $product->slug == 'atomic-round-suspension-lamp') {
                //     dispatch(new AutoResponseJob1($request->all(), $product, $coin, $currency, $product_color, $product_size_slug, $product_size_price_euro, $product_size_price_dollar, $product_option_slug, $product_option_price_dollar, $product_option_price_euro));
                    
                //     dispatch(new SpringSaleJob($request->all()));

                //     $name_user = $request->get('first_name');
                //     $email_user = $request->get('email');
                //     $products = ProductRepository::getProductsThankYouPages();
                //     return view('includes.thank-you-new.price-request', compact('name_user', 'email_user', 'products'));
                // } else {

                //     return redirect()->route('actions.error');
                // }

                dispatch(new ProductPriceJob($request->all(), $product, $coin, $currency, $product_color, $product_size_slug, $product_size_price_euro, $product_size_price_dollar, $product_option_slug, $product_option_price_dollar, $product_option_price_euro));
                dispatch(new SpringSaleJob($request->all()));
                //dispatch(new ProductPriceJobBrand($request->all(), $details, $url_converted));
                // Mail::to('info@circu.net', 'Circu Magical Furniture')->send(new ProductPrice($request));

                // $product_name = str_replace('-', ' ', $request->get('product_name'));

                // Mail::send('mail.auto-reply.product-price', ['request' => $request, 'product' => $product, 'product_name' => $product_name], function ($m) use ($request, $product_name) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | ' . ucwords($product_name) . ' Price Request');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // return redirect()->route('actions.get-price');
                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.price-request', compact('name_user', 'email_user', 'products'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function ProductOrder(Request $request, $product)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $product = ProductRepository::getProduct($product);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'city' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric',
            'hear_about' => 'required'
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $client = new Client;

            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('product_name') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('product_name');
            }

            // $response = $client->post('http://webuzz.com.pt/subscribers_get/post_infos.php', [
            //     'verify' => false,
            //     'form_params' =>[
            //         'name' => $request->get('name'),
            //         'email' => $request->get('email'),
            //         'marca' => 'Circu',
            //         'tipo'=> 'Buy Now',
            //         'tipo_request' => 'Lead',
            //         'origin' => $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
            //         'url' => session('origin_Client'),
            //         'peca' => $request->get('name_piece'),
            //         'token_webuzz' => 'g2zAsJ8NrvZHmdCuvydCWoGWNjYRsr9jYbPpDIqf'
            //     ]
            // ]);


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Buy Now',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'cta'             => 'Order Now',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $response = $impact->send($jsonContent);

            salesForce($request, 'Lead', 'Website', 'Forms', 'Buy Now', ' ', $details);

            if ($response == true) {

                dispatch(new ProductOrderJob($request->all(), $product));
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductOrder($request));

                // $product_name = str_replace('-', ' ', $request->get('product_name'));

                // Mail::send('mail.auto-reply.product-order', ['request' => $request, 'product' => $product, 'product_name' => $product_name], function ($m) use ($request, $product_name) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Request ' . ucfirst($product_name) . ' Price');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                $name_user = $request->get('name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.price-request', compact('name_user', 'email_user', 'products'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function ProductDownloads(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $download_option = " ";
            foreach ($request->get('download_options') as $download_option) {
                $download_option = " " . $download_option . " / " . $request->get('product_name');
            }


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'form'            => 'Download',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $download_option,
                'cta'             => 'Request Now',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Download', ' ', '' . ' - ' . $download_option);


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Contact($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Contact');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('actions.info');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function Product3D(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'city' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric',
            'hear_about' => 'required'
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'      => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => '3D file',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Download 3d Model',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', '3D file', ' ', $request->get('product_name'));

            $product = ProductRepository::getProduct($request->get('product_name'));

            $product_name = str_replace('-', ' ', $request->get('product_name'));
            $url_converted = $_SERVER['HTTP_REFERER'];
                
                
            if ($response == true) {
                //dispatch(new Product3dJobBrand($request->all(), $url_converted));
                dispatch(new Product3dJob($request->all(), $product, $product_name));
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Product3DFile($request));

                // Mail::send('mail.auto-reply.product-3d', ['request' => $request, 'product' => $product, 'product_name' => $product_name], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Product 3D');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // return redirect()->route('actions.download-3d');
                $name_user = $request->get('first_name');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.request-spec', compact('name_user', 'products'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function ProductInfo(Request $request, $product)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $product = ProductRepository::getProduct($product);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'city' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric',
            'hear_about' => 'required'

        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('product_name') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('product_name');
            }


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Product info',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'cta'             => 'Get Info',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $product_name = $request->get('product_name');

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Product info', ' ', $details);

            $product_name = str_replace('-', ' ', $request->get('product_name'));

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductInfo($request));

                // $product_name = str_replace('-', ' ', $request->get('product_name'));

                // Mail::send('mail.auto-reply.product-info', ['request' => $request, 'product' => $product, 'product_name' => $product_name], function ($m) use ($request, $product_name) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | ' . ucwords($product_name) . ' Info Request');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // return redirect()->route('actions.info');
                $name_user = $request->get('name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.get-info', compact('name_user', 'email_user', 'products'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function ProductCostumize(Request $request, $product)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $product = ProductRepository::getProduct($product);

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'city' => 'required',
            'occupation' => '',
            'company' => '',
            'phone' => 'nullable|numeric',
            'costumize' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('product_name') . " COSTUMIZE - " . $request->get('costumize') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('product_name') . " COSTUMIZE - " . $request->get('costumize');
            }

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Product info',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'cta'             => 'Get Info',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $product_name = $request->get('product_name');

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Product info', ' ', $details);

            $product_name = str_replace('-', ' ', $request->get('product_name'));
            $url_converted = $_SERVER['HTTP_REFERER'];

            if ($response == true) {
                //dispatch(new ProductCostumJobBrand($request->all(), $details, $url_converted));
                dispatch(new ProductCustomJob($request->all(), $product, $product_name));
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductInfo($request));

                // $product_name = str_replace('-', ' ', $request->get('product_name'));

                // Mail::send('mail.auto-reply.product-info', ['request' => $request, 'product' => $product, 'product_name' => $product_name], function ($m) use ($request, $product_name) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | ' . ucwords($product_name) . ' Costumization Request');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // return redirect()->route('actions.info');
                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.get-info', compact('name_user', 'email_user', 'products'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function SampleInfo(Request $request, $finish)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $product = ProductRepository::getSample($finish);

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric',
            'hear_about' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('product_name') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('product_name');
            }
            $product_name = str_replace('-', ' ', $request->get('product_name'));

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Samples',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'product_type'    => 'Samples',
                'product_name'    =>  $product_name,
                'cta'             => 'Get Info',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Samples', '', $details);



            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->route('actions.info');
                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.get-info', compact('name_user', 'email_user', 'products'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function NewProductPreview(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Product info',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => "Fair MO 2020 . New Product Request Info " . $request->get('product_name'),
                'cta'             => 'Get Info',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $product_name = $request->get('product_name');

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Product info', ' ', "Fair MO 2020 . New Product Request Info " . $request->get('product_name'));

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Contact($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Contact');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('actions.info');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function ProductSheet(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'      => $request->get('last_name'),
                'country'         => $request->get('country'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Product sheet',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $product_name = $request->get('product_name');

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Product sheet', ' ', $request->get('product_name'));

            $product_name = str_replace('-', ' ', $request->get('product_name'));
            $url_converted = $_SERVER['HTTP_REFERER'];
                
            if ($response == true) {

                $product = ProductRepository::getProduct($request->get('product_name'));

                $product_name = str_replace('-', ' ', $request->get('product_name'));
                //dispatch(new ProductSheetJobBrand($request->all(), $url_converted));
                dispatch(new ProductSheetJob($request->all(), $product, $product_name));
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductSheet($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');
                //
                //     $m->to($request->get('email'))->subject('Circu | Contact');
                // });

                // Mail::send('mail.auto-reply.product-sheet', ['request' => $request, 'product' => $product, 'product_name' => $product_name], function ($m) use ($request, $product_name) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | ' . ucwords($product_name) . ' Info Request');
                // });
                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->route('actions.download-sheet');
                $name_user = $request->get('first_name');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.request-spec', compact('name_user', 'products'));
            } else {
                return redirect()->route('actions.error');
            }
        }
    }

    public function productPressRelease(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'occupation'      => $request->get('occupation'),
                'form'            => 'Press Release',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Press Release', ' ', $request->get('origin'));

            $response = true;

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductPressRelease($request));

                // Mail::send('mail.auto-reply.product-press-release', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Product Press Release');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // $json =  file_get_contents("https://www.circu.net/includes/json/product-press-release.json");
                // $array = json_decode($json, true);

                // $array_product = array();

                // foreach ($array as $product => $press_release) {
                //     if ($product == $request->get('product_slug')) {
                //         array_push($array_product, array('title' => $press_release['title'], 'image' => $press_release['image'], 'url' => $press_release['url']));
                //     }
                // }

                // if (!array_filter($array_product)) {
                //     array_push($array_product, array('title' => $array['default']['title'], 'image' => $array['default']['image'], 'url' => $array['default']['url']));
                // }

                return view('includes.thank-you.download-product-press-release', compact('array_product'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function productCustomization(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'project' => 'required',
            'customization' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $client = new Client;

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Product info',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'PROJECT TYPE: ' . $request->get('project') . ' TYPE OF CUSTOMIZATION NEEDEED: ' . $request->get('customization') . ' MORE INFORMATION: ' . $request->get('project_info'),
                'interested_name' => 'Product Customization Request',
                'cta'             => 'Submit',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Product info', ' ', 'PROJECT TYPE: ' . $request->get('project') . ' TYPE OF CUSTOMIZATION NEEDEED: ' . $request->get('customization') . ' MORE INFORMATION: ' . $request->get('project_info'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));

                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductCustomization($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Contact');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // return redirect()->route('actions.info');
                $name_user = $request->get('name');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.costumization', compact('name_user', 'products'));
            } else {
                return redirect()->route('actions.error');
            }
        }
    }

    public function productMoodboard(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'occupation'      => $request->get('occupation'),
                'form'            => 'Infographic',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Downloaded moodboard of ' . $request->get('product_slug'),
                'interested_name' => 'Moodboards',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Infographic', ' ', $request->get('origin'));

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL_PRESS'), 'Circu Magical Furniture')->send(new ProductMoodboard($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Thank you for your download!');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                $json =  file_get_contents("https://www.circu.net/includes/json/product-moodboards.json");
                $array = json_decode($json, true);

                $array_product = array();

                foreach ($array as $product => $moodboard) {
                    if ($product == $request->get('product_slug')) {
                        array_push($array_product, array('title' => $moodboard['moodboard_title'], 'image' => $moodboard['moodboard_image'], 'url' => $moodboard['moodboard_url']));
                    }
                }

                if (!array_filter($array_product)) {
                    array_push($array_product, array('title' => $array['default']['moodboard_title'], 'image' => $array['default']['moodboard_image'], 'url' => $array['default']['moodboard_url']));
                }

                return view('includes.thank-you.download-product-moodboard', compact('array_product'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function pricelist(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => '',
            'company' => '',
            'state' => '',
            'hear_about' => ''
        ]);

        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $client = new Client;

            $currency = checkCurrencyCountry($request->get('country'));

            if ($request->get('virtual_meeting') == "yes") {
                $details = "Request " . $currency . ". THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = "Request " . $currency;
            }

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'company'         => $request->get('company'),
                'form'            => 'PriceList',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details . ' ' . $request->get('more_info'),
                'cta'             => 'Get Price List',
                'cta_color'       => 'Green',
                'page'            => 'Pricelist',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'PriceList', ' ', $details . ' ' . $request->get('more_info'));

            $url_converted = $_SERVER['HTTP_REFERER'];
                
            if ($response == true) {

                dispatch(new PricelistJob($request->all()));
                dispatch(new SpringSaleJob($request->all()));

                $name_user = $request->get('first_name') . ' ' . $request->get('last_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.pricelist', compact('name_user', 'email_user', 'products'));
            } else {
                return redirect()->route('actions.error');
            }
        }
    }

    public function pricelistPop(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric',
            'hear_about' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $client = new Client;

            $currency = checkCurrency($request->get('country'));

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'PriceList',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Request Pricelist ' . $currency,
                'cta'             => 'Get Price List',
                'cta_color'       => 'Green',
                'page'            => 'Pricelist',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'PriceList', ' ', 'request pricelist ' . $currency);


            if ($response == true) {
                dispatch(new PricelistJob($request->all()));
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to('pedrogsmoreira@gmail.com')->send(new Pricelist($request));

                // Mail::send('mail.auto-reply.pricelist', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('As you wish our Pricelist');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return Redirect::to('/news/events/2018/set-decorex-uk-2018'.'#here')->with('message', 'Thank you for your request. Our team will get in touch with you.');
                return redirect()->route('actions.pricelist');
            } else {
                // return Redirect::to('/news/events/2018/set-decorex-uk-2018'.'#here')->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function subscribe(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email',
            'country' => 'required|max:255',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $client = new Client;

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'form'            => 'Subscriber',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'cta'             => 'Send',
                'cta_color'       => 'Green',
                'page'            => 'Homepage',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Subscriber', ' ', 'To be contacted');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Subscribe($request));

                // Mail::send('mail.auto-reply.subscribe', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('We Have More Inspirations Waiting For You');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'You are now subscribed');
                // return redirect()->route('actions.newsletter');
                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.subscribe', compact('name_user', 'email_user', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry, Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function subscribeFooter(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'country' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();

            // $local = get_country($_SERVER["REMOTE_ADDR"]);

            $jsonContent = [
                'email'           => $request->get('email'),
                'country'         => $request->get('country'),
                'form'            => 'Subscriber',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'cta'             => 'Send',
                'cta_color'       => 'Green',
                'page'            => 'Homepage',
                'page_position'   => 'Bottom',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Subscriber', ' ', 'To be contacted');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new SubscribeFooter($request));

                // Mail::send('mail.auto-reply.subscribe', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('We Have More Inspirations Waiting For You');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                //return redirect()->back()->with('message', 'You are now subscribed');
                // return redirect()->route('actions.newsletter');
                $name_user = '';
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.subscribe', compact('name_user', 'email_user', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry, Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function contact(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'phone' => 'nullable|numeric',
            'occupation' => 'required',
            'company' => 'required',
            'city' => 'required',
            'hear_about' => 'required',
            'message' => 'required',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $client = new Client;

            if ($request->get('virtual_meeting') == "yes") {
                $details = "Message: " . $request->get('message') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = "Message: " . $request->get('message');
            }

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'      => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Contact',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'cta'             => 'Submit Request',
                'cta_color'       => 'Green',
                'page'            => 'Contact',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Contact', ' ', $details);

            $url_converted = $_SERVER['HTTP_REFERER'];
                
                
            if ($response == true) {
                //dispatch(new ContactJobBrand($request->all(), $details , $url_converted));
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Contact($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Contact Request');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. Our team will get in touch with you.');
                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.contact', compact('name_user', 'email_user', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function bookMeeting(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Book a Meeting',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => "Showrooms " . $request->get('event'),
                'cta'             => 'Submit Request',
                'cta_color'       => 'Green',
                'page'            => 'Fairs',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Book a Meeting', ' ', $request->get('event'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new BookMeeting($request));

                // Mail::send('mail.auto-reply.book-meeting', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Book a Meeting');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('actions.book-meeting');
            } else {
                return redirect()->route('actions.error');
            }
        }
    }

    public function bookMeetingFair(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Book a Meeting',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => "Fair " . $request->get('fair_name') . " Brand Ambassador " . $request->get('brand_ambassador') . " Choosen Date " . $request->get('choosen_date'),
                'cta'             => 'Submit Request',
                'cta_color'       => 'Green',
                'page'            => 'Fairs',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Book a Meeting', ' ', "Fair " . $request->get('fair_name') . " Brand Ambassador " . $request->get('brand_ambassador') . " Choosen Date " . $request->get('choosen_date'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new BookMeetingFair($request));

                // Mail::send('mail.auto-reply.book-meeting', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Book a Meeting');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('actions.book-meeting');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function pressRelease(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'hear_about' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Press Release',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('fair_name'),
                'cta'             => 'Submit Request',
                'cta_color'       => 'Green',
                'page'            => 'Press',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead Press', 'Website', 'Forms', 'Press Release', ' ', $request->get('fair_name'));
            $press_release = $request->get('fair_name');

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                dispatch(new PressReleaseJob($request->all()));
                // Mail::to('press@circu.net', 'Circu Magical Furniture')->send(new ProductPressRelease($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from('press@circu.net', 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Download Press Content');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                
                $name_user = $request->get('first_name') . ' ' . $request->get('last_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();

                return view('includes.thank-you-new.press-release', compact('name_user', 'email_user', 'products', 'press_release'));
                // return view('includes.thank-you.download-press-release', compact('press_release'));

                return redirect()->route('actions.download-press-release');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function pocketNewProducts(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'hear_about' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Contact',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('fair_name'),
                'cta'             => 'Submit Request',
                'cta_color'       => 'Green',
                'page'            => 'Fairs',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Request Info New Products MO 2019', ' ', $request->get('fair_name'));

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new BookMeeting($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Request Info of New Products MO 2019');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('actions.download-pocket-new-products');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function PressRegister(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required | email | unique:users,email',
            'specialty' => 'required',
            'company' => 'required',
            'country' => 'required',
            'city' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $user_level = User_level::find(4);

            $password = "PETERPAN";


            $user = new User();
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = bcrypt($password);
            $user->is_active = true;
            $user->user_level()->associate($user_level);
            $user->save();


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Password',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'cta'             => 'Request Password',
                'cta_color'       => 'Green',
                'page'            => 'Press',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead Press', 'Website', 'Forms', 'Press', ' ', 'Request Press Access');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                dispatch(new PressRegisterJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL_PRESS'), 'Circu Magical Furniture')->send(new Pressroom($request));

                // Mail::send('mail.auto-reply.press', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL_PRESS'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Request Press Access');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                return redirect()->route('press')->with('message', 'You are now registered. Please check your email to receive your password.');
            } else {
                // return redirect()->route('press')->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function PressLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required|max:255|in:PETERPAN|regex:/(^[A-Za-z0-9 ]+$)+/'
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            // $impact = new \ImpactData();
            // $jsonContent = [
            //     'email'           => $request->get('email'),
            //     'form'            => 'Login',
            //     'lead_type'       => 'Lead',
            //     'url_origin'      => $request->get('origin'),
            //     'url_converted'   => $_SERVER['HTTP_REFERER'],
            //     'referrer'        => $request->get('referrer'),
            //     'lead_path'       => $request->get('lead_path'),
            //     'cta'             => 'Login',
            //     'cta_color'       => 'Green',
            //     'page'            => 'Press',
            //     'page_position'   => 'Top',
            // ];

            // $impact->send($jsonContent);

            // $response = salesForce($request, 'Lead Press', 'Website', 'Forms', 'Login', ' ', 'Press Login');

            $press = array(
                'email'     => $request->get('email'),
                'password'  => $request->get('password')
            );

            if (Auth::attempt($press)) {
                // Mail::to(env('BRAND_EMAIL_GERAL_PRESS'), 'Circu Magical Furniture')->send(new PressroomLogin($request));
                return redirect()->route('pressroom.home')->with('message', 'Logged in!');
            } else {
                // return redirect()->route('press')->with('message', 'Your credentials doesn\'t match our records' );
                return redirect()->back()->withErrors('Your credentials doesn\'t match our records');
            }
        }
    }

    public function PressLogout()
    {
        Auth::logout();
        return redirect()->route('press');
    }

    public function BackofficeLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $backoffice = array(
                'email'     => $request->get('email'),
                'password'  => $request->get('password')
            );

            if (Auth::attempt($backoffice) && Auth::User()->user_level_id == 2) {
                return redirect()->route('backoffice.homepage')->with('msg', 'Logged in!');
            } else {
                return redirect()->back()->withErrors('Your credentials doesn\'t match our records');
            }
        }
    }

    public function BackofficeLogout()
    {
        Auth::logout();
        return redirect()->route('backoffice-login');
    }

    public function search(Request $request)
    {
        $searchResults = ProductRepository::searchProduct($request->get('term'));

        return response()->json($searchResults);
    }

    public function getSearchPage(Request $request)
    {
        $term = $request->get('term');
        $searchResults = ProductRepository::searchProductPage($term);

        return view('frontend.searchPage', compact('searchResults', 'term'));
    }

    public function filter($search_term)
    {
        $searchResults = ProductRepository::getProductsByKeyword($search_term);

        return view('includes.filter', compact('searchResults', 'search_term'));
    }

    public function filterSamples($search_terms)
    {
        $searchResultsSamples = ProductRepository::getProductsByKeywordSamples($search_terms);

        return view('includes.filterSamples', compact('searchResultsSamples', 'search_terms'));
    }

    public function campaignSummerSales(Request $request, $product)
    {

        $product = ProductRepository::getProduct($product);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Get Price',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', 'Campaign Summer Sales ' . $request->get('product_name'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductPrice($request));

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // if (($product->id == 54) || ($product->id == 55) || ($product->id == 56) || ($product->id == 57) || ($product->id == 58) || ($product->id == 59) || ($product->id == 60) || ($product->id == 61) || ($product->id == 62) || ($product->id == 63) || ($product->id == 64) || ($product->id == 65) || ($product->id == 66) || ($product->id == 67)) {

                //     Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //         $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //         $m->to($request->get('email'))->subject('Circu | Contact');
                //     });
                // } else {

                //     Mail::send('mail.auto-reply.product-price', ['request' => $request, 'product' => $product], function ($m) use ($request) {
                //         $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //         $m->to($request->get('email'))->subject('Circu | Request Product Price');
                //     });
                // }

                return redirect()->route('actions.get-price');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function campaignCarnival(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'company' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'      => $request->get('last_name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => "Campaign Carnival Pick Your Color . Choosen Color " . $request->get('product_color'),
                'cta'             => 'Submit Request',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', "Campaign Carnival Pick Your Color . Choosen Color: " . $request->get('product_color'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Contact($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Contact');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('actions.info');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }
    
    public function downloadEbook(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'occupation' => 'required'
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            //dd($request);
            $product_slug = null;
            if ($request->get('product_slug') !== null) {
                $product_slug = $request->get('product_slug');
            } else if ($request->get('files') !== null && count($request->get('files')) > 0) {
                for ($i = 0; $i < count($request->get('files')); $i++) {
                    $product_slug .= $request->get('files')[$i] . " / ";
                }
            }


            if ($request->get('product_slug') == 'catalogue-annual-sales') {
                $form_type = 'StockList';
                $details = 'Downloaded Circu Annual Sale';
            }elseif ($request->get('product_slug') == 'stocklist-spring-sale') {
                $form_type = 'Stocklist';
                $details = 'Downloaded Circu Spring Sale';
            } elseif ($request->get('product_slug') == 'stocklist-annual-sale') {
                $form_type = 'StockList';
                $details = 'Downaloaded Circu Annual Sale';
            }
            elseif ($request->get('product_slug') == 'catalogue-circu-magical-furniture') {
                $form_type = 'Catalogue';
                $details = 'Downloaded Circu Catalogue';
            }
            else {
                if ($request->get('virtual_meeting') !== null) {
                    if ($request->get('virtual_meeting') == "yes") {
                        $details = "Downloaded " . $product_slug . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
                    } else {
                        $details = $product_slug;
                    }
                } else {
                    $details = "Downloaded " . $product_slug;
                }
                if ($request->get('product_type') == 'catalogue') {
                    $form_type = 'Catalogue';
                } else {
                    $form_type = 'Ebooks';
                }
            }



            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'occupation'      => $request->get('occupation'),
                'form'            => $form_type,
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'interested_name' => 'Other',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Catalogue',
                'page_position'   => 'Center',
            ];



            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', $form_type, ' ', $details);
            
            if ($response == true) {

                Mail::to('info@circu.net')->send(new DownloadsEmail($request));

                $product_name = str_replace('-', ' ', $request->get('product_name'));
                $url_converted = $_SERVER['HTTP_REFERER'];

                dispatch(new EbookJob($request->all(), $product_name));
                dispatch(new SpringSaleJob($request->all()));

                $name_user = $request->get('first_name') . ' ' . $request->get('last_name');
                $name_ebook = $request->get('product_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                if ($request->get('product_type') == 'catalogue') {
                    return view('includes.thank-you-new.catalogue', compact('name_user', 'email_user', 'name_ebook', 'products'));
                } else {
                    return view('includes.thank-you-new.ebook', compact('name_user', 'email_user', 'name_ebook', 'products'));
                }
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function downloadHRImages(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'occupation'      => $request->get('occupation'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Downloaded digital content ' . $request->get('product_slug'),
                'interested_name' => 'Other',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Project',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'HR Images', ' ', 'Downloaded digital content ' . $request->get('product_slug'));

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new HRImages($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('We have more inspirations waiting for you');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                $url_path = "https://www.circu.net/docs/high-resolution-img/project-" . $request->get('product_slug') . ".zip";

                return view('includes.thank-you.download-high-resolution', compact('url_path'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }


    public function RequestCuppon(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'occupation'      => $request->get('occupation'),
                'phone'           => $request->get('phone'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('more_info'),
                'interested_name' => 'Other',
                'cta'             => 'Request Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', $request->get('more_info'));

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Cuppon($request));

                // Mail::send('mail.auto-reply.cuppon', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Cuppon 60% Request');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('actions.request-cuppon');
            } else {
                return redirect()->route('actions.error');
            }
        }
    }

    public function RequestCupponBedroom(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'occupation'      => $request->get('occupation'),
                'phone'           => $request->get('phone'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('more_info'),
                'interested_name' => 'Other',
                'cta'             => 'Request Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', $request->get('more_info'));

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Cuppon($request));

                // Mail::send('mail.auto-reply.cuppon', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Cuppon 45% Bedroom');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('actions.request-cuppon');
            } else {
                return redirect()->route('actions.error');
            }
        }
    }


    public function DownloadStocklist(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'occupation'      => $request->get('occupation'),
                'phone'           => $request->get('phone'),
                'form'            => 'StockList',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('more_info'),
                'interested_name' => 'Other',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', $request->get('more_info'));
            $product_name = str_replace('-', ' ', $request->get('product_name'));
            if ($response == true) {
                dispatch(new EbookJob($request->all(), $product_name));
                // dispatch(new StocklistJob($request->all()));
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Stocklist($request));

                // Mail::send('mail.auto-reply.stocklist', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Deals Download Stocklist');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.stocklist', compact('name_user', 'email_user', 'products'));
            } else {
                return redirect()->route('actions.error');
            }
        }
    }

    public function EntranceDeals(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('more_info'),
                'interested_name' => 'Other',
                'cta'             => 'Request Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', $request->get('more_info'));

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect('/deals');
            } else {
                return redirect('/');
            }
        }
    }

    public function pricelistBanner(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'phone' => 'nullable|numeric',
            'occupation' => 'required',
            'company' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'PriceList',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Download Pricelist',
                'cta'             => 'Get Price List',
                'cta_color'       => 'Green',
                'page'            => 'Pricelist',
                'page_position'   => 'Center',
            ];


            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'PriceList', ' ', 'Download Pricelist');


            if ($response == true) {
                dispatch(new PricelistJob($request->all()));
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Pricelist($request));

                // Mail::send('mail.auto-reply.pricelist', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('As you wish our Pricelist');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. Our team will get in touch with you.');
                return redirect()->route('actions.pricelist');
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function pricelistShowroom(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'phone' => 'nullable|numeric',
            'occupation' => 'required',
            'company' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'PriceList',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Pricelist Shoowroom',
                'cta'             => 'Get Price List',
                'cta_color'       => 'Green',
                'page'            => 'Pricelist',
                'page_position'   => 'Center',
            ];


            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'PriceList', ' ', 'Pricelist Showroom');


            if ($response == true) {
                dispatch(new PricelistShowroomJob($request->all()));
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Pricelist($request));

                // Mail::send('mail.auto-reply.pricelist', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('As you wish our Pricelist');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. Our team will get in touch with you.');
                return redirect()->route('actions.pricelist');
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function catalogueNew(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'phone' => 'nullable|numeric',
            'occupation' => 'required',
            'company' => 'required'
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'company'         => $request->get('company'),
                'form'            => 'PriceList',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Get Price List',
                'cta_color'       => 'Green',
                'page'            => 'Pricelist',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Catalogue', ' ', $request->get('product_name'));


            if ($response == true) {

                dispatch(new CatalogueJob($request->all()));
                
                dispatch(new SpringSaleJob($request->all()));

                $name_user = $request->get('name');
                $name_ebook = $request->get('product_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.catalogue', compact('name_user', 'email_user', 'name_ebook', 'products'));
            } else {
                return redirect()->route('actions.error');
            }
        }
    }

    public function ebook(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'occupation' => 'required',
            'company' => 'required'
        ]);

        if ($request->get('product_slug') == 'stocklist-annual-sale') {
            $form_type = 'StockList';
        } else {
            $form_type = 'Download';
        }
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'company'         => $request->get('company'),
                'form'            => $form_type,
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Download ' . $request->get('product_name'),
                'cta'             => 'Get Price List',
                'cta_color'       => 'Green',
                'page'            => 'Pricelist',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', $form_type, ' ', 'Download ' . $request->get('product_name'));


            if ($response == true) {
                $product_name = str_replace('-', ' ', $request->get('product_name'));
                // dispatch(new SpringSaleJob($request->all()));
                dispatch(new SpringSaleJob($request->all()));
                dispatch(new EbookJob($request->all(), $product_name));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new EbookNew($request));

                // Mail::send('mail.auto-reply.ebook', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('As you wish our Book');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                $name_user = $request->get('name');
                $name_ebook = $request->get('product_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.ebook', compact('name_user', 'email_user', 'name_ebook', 'products'));
            } else {
                return redirect()->route('actions.error');
            }
        }
    }


    public function ProductPriceMagicalMonth(Request $request, $product)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $product = ProductRepository::getProduct($product);


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => '',
            'company' => '',
            'phone' => 'required|numeric',
            'hear_about' => ''
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('product_name') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('product_name');
            }


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Price',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details . ' ' . $request->get('more_info'),
                'cta'             => 'Get Price',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Price', ' ', $details . ' ' . $request->get('more_info'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductPrice($request));

                // $product_name = str_replace('-', ' ', $request->get('product_name'));

                // $id_form = $request->get('id_form');

                // Mail::send('mail.auto-reply.product-price-magical-month', ['request' => $request, 'product' => $product, 'product_name' => $product_name, 'id_form' => $id_form], function ($m) use ($request, $product_name, $id_form) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Request ' . ucfirst($product_name) . ' Price');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // return redirect()->route('actions.get-price-magical-month');
                $name_user = $request->get('name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.price-request', compact('name_user', 'email_user', 'products'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function ProductPriceMagicalMonthGumChair(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }



        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => '',
            'company' => '',
            'phone' => 'required|numeric',
            'hear_about' => ''
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('product_name') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('product_name');
            }


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Price',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details . ' ' . $request->get('more_info'),
                'cta'             => 'Get Price',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Price', ' ', $details . ' ' . $request->get('more_info'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new ProductPrice($request));



                // $id_form = $request->get('id_form');

                // Mail::send('mail.auto-reply.product-price-magical-month-gum-chair', ['request' => $request, 'id_form' => $id_form], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | Request Gum Chair Price');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                // return redirect()->route('actions.get-price-magical-month');
                $name_user = $request->get('name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.price-request', compact('name_user', 'email_user', 'products'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function DownloadStory(Request $request)
    {
        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            //dd($request);
            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('more_info') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('more_info');
            }

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'occupation'      => $request->get('occupation'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'interested_name' => 'Other',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Catalogue',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Catalogue', ' ', $details);

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Ebook($request));

                // Mail::send('mail.auto-reply.catalogue', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('As you wish our Catalogue');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });


                $slug = 'welcome-to-world-of-fantasy';
                return view('includes.thank-you.downloads-about', compact('slug'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }


    public function downloadCatalogue2023(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => '',
            'occupation' => 'required'
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            //dd($request);
            if ($request->get('virtual_meeting') == "yes") {
                $details = $request->get('more_info') . " . THIS PERSON WANTS TO BOOK A VIRTUAL MEETING";
            } else {
                $details = $request->get('more_info');
            }

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'      => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'occupation'      => $request->get('occupation'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $details,
                'interested_name' => 'Other',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Catalogue',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Catalogue', ' ', $details);

            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Ebook($request));

                // Mail::send('mail.auto-reply.catalogue', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('As you wish our Catalogue');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });


                $slug = 'catalogue-circu-magical-furniture';
                return view('includes.thank-you.downloads-about', compact('slug'));
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function OurHouses(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'phone'           => $request->get('phone'),
                'company'         => $request->get('company'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('more_info'),
                'cta'             => 'Request Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', $request->get('more_info'));


            if ($response == true) {

                \Session::put('user-login', 1);
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Contact($request));

                // Mail::send('mail.auto-reply.our-houses-boy-room', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | OUR MAGICAL ROOMS');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('our-houses-new');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }

    public function BookAppointment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'showroom_day' => 'required',
            'showroom_time' => 'required',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'           => $request->get('state'),
                'phone'           => $request->get('phone'),
                'company'         => $request->get('company'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('more_info').' day '. $request->get('showroom_day') .' time '. $request->get('showroom_time') ,
                'cta'             => 'Request Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $moreInformation = $request->get('more_info').' day '. $request->get('showroom_day') .' time '. $request->get('showroom_time');


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', $moreInformation);


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Contact($request));

                // Mail::send('mail.auto-reply.our-houses-boy-room', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | OUR MAGICAL ROOMS');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->back()->with('message', 'Appointment marked with sucess!');
            } else {

                return redirect()->route('actions.error');
            }
        }
    }


    public function EbookNewOurHouses(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'state'            => $request->get('state'),
                'company'         => $request->get('company'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Our Houses - DOWNLOAD EBOOK',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Download', ' ', 'Our Houses - DOWNLOAD EBOOK');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new EbookOurHouses($request));

                // Mail::send('mail.auto-reply.our-houses-ebook', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | As you wish our Ebook');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. You will receive the catalogue in your email.');
                // return redirect()->route('actions.new-ebook-our-houses');
                $name_user = $request->get('name');
                $name_ebook = 'Ebook Magical Rooms';
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.ebook', compact('name_user', 'email_user', 'name_ebook', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function OurHousesEbook(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Our Houses - DOWNLOAD EBOOK',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Download', ' ', 'Our Houses - DOWNLOAD EBOOK');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new EbookOurHouses($request));

                // Mail::send('mail.auto-reply.our-houses-ebook', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | As you wish our Ebook');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. You will receive the catalogue in your email.');
                // return redirect()->route('actions.new-ebook-our-houses');

                $name_user = 'Costumer';
                $name_ebook = 'Ebook Magical Rooms';
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.ebook', compact('name_user', 'email_user', 'name_ebook', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function PricelistOurHouses(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'      => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'            => $request->get('state'),
                'company'         => $request->get('company'),
                'form'            => 'PriceList',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Our Houses - DOWNLOAD PRICELIST',
                'cta'             => 'Get Price List',
                'cta_color'       => 'Green',
                'page'            => 'PriceList',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'PriceList', '', '', 'Our Houses - DOWNLOAD PRICELIST');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new EbookOurHouses($request));

                // Mail::send('mail.auto-reply.our-houses-pricelist', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | As you wish our Price List');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. You will receive the catalogue in your email.');
                // return redirect()->route('actions.pricelist-our-houses');

                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.pricelist', compact('name_user', 'email_user', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function PriceProjectOurHouses(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'         => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'            => $request->get('state'),
                'company'         => $request->get('company'),
                'form'            => 'PriceList',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Our Houses - Request Project Price: ' . $request->get('room'),
                'cta'             => 'Get Price List',
                'cta_color'       => 'Green',
                'page'            => 'PriceList',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'PriceList', ' ', 'Our Houses - Request Project Price: ' . $request->get('room'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new EbookOurHouses($request));

                // Mail::send('mail.auto-reply.our-houses-pricelist', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | As you wish our Price List');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. You will receive the catalogue in your email.');
                // return redirect()->route('actions.pricelist-our-houses');

                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.pricelist', compact('name_user', 'email_user', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function HRImagesBoyOurHouses(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'state'            => $request->get('state'),
                'company'         => $request->get('company'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Our Houses - DOWNLOAD HR IMAGES BOY',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Download', ' ', 'Our Houses - DOWNLOAD HR IMAGES BOY');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new EbookOurHouses($request));

                // Mail::send('mail.auto-reply.our-houses-hr-images-boy', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | As you wish our HR Images');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. You will receive the catalogue in your email.');
                return redirect()->route('actions.new-ebook-our-houses');
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function HRImagesGirlOurHouses(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'state'            => $request->get('state'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Our Houses - DOWNLOAD HR IMAGES GIRL',
                'cta'             => 'Download Now',
                'cta_color'       => 'Green',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Download', ' ', 'Our Houses - DOWNLOAD HR IMAGES GIRL');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new EbookOurHouses($request));

                // Mail::send('mail.auto-reply.our-houses-hr-images-girl', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | As you wish our HR Images');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                // return redirect()->back()->with('message', 'Thank you for your request. You will receive the catalogue in your email.');
                return redirect()->route('actions.new-ebook-our-houses');
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function IdService(Request $request)
    {

        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'more_info' => '',
            'state' => ''
        ]);
        if($request->get('country') != 'United States'){
            $request->get('state') == '';
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('first_name'),
                'last_name'       => $request->get('last_name'),
                'country'         => $request->get('country'),
                'state'            => $request->get('state'),
                'phone'           => $request->get('phone'),
                'form'            => 'Contact',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('more_info'),
                'cta'             => 'Submit Request',
                'cta_color'       => 'Green',
                'page'            => 'Contact',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Contact', ' ', $request->get('more_info'));


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::to(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Contact($request));

                // Mail::send('mail.auto-reply.info', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | Contact');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });
                $name_user = $request->get('first_name');
                $email_user = $request->get('email');
                $products = ProductRepository::getProductsThankYouPages();
                return view('includes.thank-you-new.contact', compact('name_user', 'email_user', 'products'));
            } else {
                // return redirect()->back()->with('message', 'Sorry we could not sent your email to our team. Please try again');
                return redirect()->route('actions.error');
            }
        }
    }

    public function dicountAniversary(Request $request)
    {
        sleep(3);
        if ($request->get('interested') !== null) {
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'country' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $client = new Client;

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'country'         => $request->get('country'),
                'form'            => 'Campaign',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'cta'             => 'Send',
                'cta_color'       => 'Green',
                'page'            => 'Homepage',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Campaign', ' ', '5th Anniversary');


            if ($response == true) {
                dispatch(new SpringSaleJob($request->all()));
                // Mail::send('mail.auto-reply.5th-anniversary', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('CIRCU | 5th Anniversary Voucher');
                // });

                // Mail::send('mail.auto-reply.spring-sale', ['request' => $request], function ($m) use ($request) {
                //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

                //     $m->to($request->get('email'))->subject('Circu | SPRING SALE');
                // });

                return redirect()->route('deals');
            } else {
                // return redirect()->back()->with('message', 'Sorry, Please try again');
                return redirect()->route('actions.error');
            }
        }
    }
}