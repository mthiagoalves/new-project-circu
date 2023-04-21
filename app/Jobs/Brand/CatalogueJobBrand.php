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

class CatalogueJobBrand implements ShouldQueue
{
     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
       /**
       * Create a new job instance.
       *
       * @return void
       */
      public $request;
      public $details;
      public $url_converted;
      public function __construct($request, $details, $url_converted)
        {
            $this->request = $request;
            $this->details = $details;
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
      $details = $this->details;
      $url_converted = $this->url_converted;

      Mail::send('mail.to-brand.catalogue', ['request' => $request, 'details' => $details, 'url_converted' => $url_converted], function($message) use ($request) {
          $message->from($request['email'], 'Circu Magical Furniture');
          $message->to('info@circu.net')->bcc('teste.ruben02@gmail.com')->subject('Circu | Catalogue');
      });
      }
}