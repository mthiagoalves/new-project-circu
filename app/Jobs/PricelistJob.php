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

class PricelistJob implements ShouldQueue
{
     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
       /**
       * Create a new job instance.
       *
       * @return void
       */
       public $request;

    public function __construct($request)
      {
          $this->request = $request;
      }

       /**
       * Execute the job.
       *
       * @return void
       */
     public function handle()
     {
      $request = $this->request;

    Mail::send('mail.auto-reply.pricelist', ['request' => $request], function($message) use ($request) {
        $message->from('info@circu.net', 'Circu Magical Furniture');
        $message->to($request['email'])->subject('Circu | As you wish our Pricelist');
    });
      }
}