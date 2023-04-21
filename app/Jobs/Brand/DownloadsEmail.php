<?php

namespace App\Jobs\Brand;
use Illuminate\Http\Request;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DownloadsEmail extends Mailable
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
        return $this->view('mail.to-brand.downloads')->with([
            'first_name' =>  $this->request->get('first_name'),
            'last_name' =>  $this->request->get('last_name'),
            'email' =>  $this->request->get('email'),
            'phone' => $this->request->get('phone'),
            'country' =>  $this->request->get('country'),
            'state' =>  $this->request->has('state') ? $this->request->get('state') : '',
            'occupation' => $this->request->get('occupation')  ? $this->request->get('company') : '',
            'origin' =>  $this->request->get('origin'),
            'referrer' =>  $this->request->get('referrer'),
            'lead_path' =>  $this->request->get('lead_path'),
            'company' => $this->request->get('company')  ? $this->request->get('company') : '',
            'prod_type' => $this->request->get('product_type'),
            'prod_name' => $this->request->get('product_name')
        ])->from($this->request->get('email'))->bcc('talves@portugalbrands.pt')->subject('Circu | Download');
    }
}
