<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductPressRelease extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.to-brand.product-press-release')->with([
            'product_name' =>  $this->request->get('fair_name'),
            'name' =>  $this->request->get('first_name'),
            'email' =>  $this->request->get('email'),
            'phone' => $this->request->get('phone'),
            'country' =>  $this->request->get('country'),
            'occupation' => $this->request->get('occupation')
        ])->from($this->request->get('email'), $this->request->get('first_name'))->bcc(env('BRAND_DEVELOPER_EMAIL'))->subject('Circu | Request Press Release');
    }
}
