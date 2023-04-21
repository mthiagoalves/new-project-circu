<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Cuppon extends Mailable
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
        return $this->view('mail.to-brand.cuppon')->with([
            'name' =>  $this->request->get('name'),
            'email' =>  $this->request->get('email'),
            'phone' => $this->request->get('phone'),
            'country' =>  $this->request->get('country'),
            'occupation' => $this->request->get('occupation'),
            'company' => $this->request->get('company'),
            'more_info' => $this->request->get('more_info')
        ])->from($this->request->get('email'), $this->request->get('name'))->bcc(env('BRAND_DEVELOPER_EMAIL'))->subject('Circu | ' . $this->request->get('more_info'));
    }
}
