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

class EbookJob implements ShouldQueue
{
     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
       /**
       * Create a new job instance.
       *
       * @return void
       */
       public $request;
       public $product_name;

    public function __construct($request, $product_name)
      {
          $this->request = $request;
          $this->product_name = $product_name;
      }

       /**
       * Execute the job.
       *
       * @return void
       */
     public function handle()
     {
      $request = $this->request;
      $product_name = $this->product_name;

    Mail::send('mail.auto-reply.ebook', ['request' => $request, 'product_name' => $product_name], function($message) use ($request, $product_name) {
        $message->from('info@circu.net', 'Circu Magical Furniture');
        $message->to($request['email'])->subject('Circu | ' . ucwords($product_name) . ' Download');
    });
      }
}