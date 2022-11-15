<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
  


    }

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        return $this->from('desarrollo.inv.riquelme@gmail.com', 'Automated System for Sending Notifications')->subject('A user send you a new message')->view('email.contact-form', ['data' => $this->data]);

    }

}
