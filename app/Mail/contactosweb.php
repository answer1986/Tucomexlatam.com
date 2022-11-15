<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/*class Contactosweb extends Mailable
{
    use Queueable, SerializesModels;

    public string $submint ="Informacion de contacto";

    public string $message;

    /**
    * @param  string  $subject
    * @param  string  $message
    **/

   /* public function __construct($contacto)
    {
        $this->contacto = $contacto;
       
    }
    /**
     * Build the message.
     *
     * @return $this
     */
   /* public function build()
    {
        return $this->view('contacto');
       

    }
}


