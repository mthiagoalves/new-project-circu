<?php

namespace App\Mail;

use Illuminate\Http\Request;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Test extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    public $product;
    public $coin;
    public $currency;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $product, $coin, $currency)
    {
        $this->request = $request;
        $this->product = $product;
        $this->coin = $coin;
        $this->currency = $currency;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $request = $this->request;
        $product = $this->product;
        $coin = $this->coin;
        $currency = $this->currency;
        return $this->view('mail.auto-reply.product-price', compact($request, $product, $coin, $currency))->subject('Circu | Brand Catalogue');
    }
}