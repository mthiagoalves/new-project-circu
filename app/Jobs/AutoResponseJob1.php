<?php
namespace App\Jobs;

use Mail;
use App\Mail\Test;

use Illuminate\Http\Request;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AutoResponseJob1 implements ShouldQueue
{
     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
       /**
       * Create a new job instance.
       *
       * @return void
       */
       public $request;
       public $product;
       public $coin;
       public $currency;
       public $product_color;
       public $product_size_slug;
       public $product_size_price_dollar;
       public $product_size_price_euro;
       public $product_option_slug;
       public $product_option_price_dollar;
       public $product_option_price_euro;

    public function __construct($request, $product, $coin, $currency, $product_color, $product_size_slug, $product_size_price_euro, $product_size_price_dollar,$product_option_slug, $product_option_price_dollar, $product_option_price_euro)
      {
          $this->request = $request;
          $this->product = $product;
          $this->coin = $coin;
          $this->currency = $currency;
          $this->product_color = $product_color;
          $this->product_size_slug = $product_size_slug;
          $this->product_size_price_dollar = $product_size_price_dollar;
          $this->product_size_price_euro = $product_size_price_euro;
          $this->product_option_slug = $product_option_slug;
          $this->product_option_price_dollar = $product_option_price_dollar;
          $this->product_option_price_euro = $product_option_price_euro;
      }

       /**
       * Execute the job.
       *
       * @return void
       */
     public function handle()
     {
      $request = $this->request;
      $product = $this->product;
      $coin = $this->coin;
      $currency = $this->currency;
      $product_color = $this->product_color;
      $product_size_slug = $this->product_size_slug;
      $product_size_price_dollar = $this->product_size_price_dollar;
      $product_size_price_euro = $this->product_size_price_euro;
      $product_option_slug = $this->product_option_slug;
      $product_option_price_dollar = $this->product_option_price_dollar;
      $product_option_price_euro = $this->product_option_price_euro;

      Mail::send('mail.auto-reply.product-price-dl', ['request' => $request, 'product' => $product, 'coin' => $coin, 'currency' => $currency, 'product_color' => $product_color, 'product_size_slug' => $product_size_slug, 'product_size_price_dollar' => $product_size_price_dollar, 'product_size_price_euro' => $product_size_price_euro, 'product_option_slug' => $product_option_slug, 'product_option_price_dollar' => $product_option_price_dollar, 'product_option_price_euro' => $product_option_price_euro], function($message) use ($request) {
          $message->from('info@circu.net', 'Circu Magical Furniture');
          $message->to($request['email'])->subject('Circu | Price Request Teste');
      });
      }
}