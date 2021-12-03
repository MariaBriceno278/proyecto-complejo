<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UsuarioCreadoMail extends Mailable
{
    use Queueable, SerializesModels;
public $password ;
public $u;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($password,$u)
    {
        $this->password = $password;
        $this->u= $u;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Bienvenido a Civilibus")->view('mail.nuevoUsuario');
    }
}
