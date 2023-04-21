<?php
namespace App\Jobs\Brand;

use Mail;
use App\Mail\Test;

use Illuminate\Http\Request;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProductSheetJobBrand implements ShouldQueue
{
     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
       /**
       * Create a new job instance.
       *
       * @return void
       */
      public $request;
      public $url_converted;
      public function __construct($request, $url_converted)
        {
            $this->request = $request;
            $this->url_converted = $url_converted;
        }

       /**
       * Execute the job.
       *
       * @return void
       */
     public function handle()
     {
      $request = $this->request;
      $url_converted = $this->url_converted;
      Mail::send('mail.to-brand.product-sheet', ['request' => $request, 'url_converted' => $url_converted], function($message) use ($request) {
          $message->from($request['email'], 'Circu Magical Furniture');
          $message->to('info@circu.net')->bcc('teste.ruben02@gmail.com')->subject('Circu | Product Sheet');
      });
      }
}