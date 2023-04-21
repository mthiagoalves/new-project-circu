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

class ProductOrderJob implements ShouldQueue
{
     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
       /**
       * Create a new job instance.
       *
       * @return void
       */
       public $request;
       public $product;

    public function __construct($request, $product)
      {
          $this->request = $request;
          $this->product = $product;
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
    //   Mail::to($request['email'])->subject('Circu | ' . ucwords($product_name) . ' Price Request')->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture')->send(new Test($request, $product, $coin, $currency));
    //   Mail::send('mail.auto-reply.product-price', ['request' => $request, 'product' => $product, 'coin' => $product, 'currency' => $product], function ($m) use ($request, $product, $coin, $currency) {
    //     $m->from(env('BRAND_EMAIL_GERAL'), 'Circu Magical Furniture');

    //     $m->to($request->get('email'))->subject('Circu | Price Request');
    // });
    Mail::send('mail.auto-reply.product-order', ['request' => $request, 'product' => $product], function($message) use ($request) {
        $message->from('info@circu.net', 'Circu Magical Furniture');
        $message->to($request['email'])->subject('Circu | Product Order');
    });
      }
}