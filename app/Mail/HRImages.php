<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HRImages extends Mailable
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
        return $this->view('mail.to-brand.hr-images')->with([
            'name' =>  $this->request->get('name'),
            'email' =>  $this->request->get('email'),
            'country' =>  $this->request->get('country'),
            'city' => $this->request->get('city'),
            'occupation' => $this->request->get('occupation'),
            'company' => $this->request->get('company'),
            'product' => $this->request->get('product_slug')
        ])->from($this->request->get('email'), $this->request->get('name'))->bcc(env('BRAND_DEVELOPER_EMAIL'))->subject('Circu | Download High Resolution Images');
    }

}
