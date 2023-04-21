<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Campaign extends Mailable
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
        return $this->view('mail.to-brand.campaign')->with([
            'interested_in' =>  $this->request->get('interested_in'),
            'first_name' =>  $this->request->get('first_name'),
            'last_name' =>  $this->request->get('last_name'),
            'email' =>  $this->request->get('email'),
            'phone' => $this->request->get('phone'),
            'country' =>  $this->request->get('country'),
            'company' => $this->request->get('company')
        ])->from($this->request->get('email'), $this->request->get('name'))->bcc(env('BRAND_DEVELOPER_EMAIL'))->subject('Circu | Product of the Week');
    }

}
