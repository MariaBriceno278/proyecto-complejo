<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionAsignacion extends Mailable
{
    use Queueable, SerializesModels;
public $a;
public $sala;
public $cu;
public $detallescasos;
public $caso;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($caso,$a,$sala)
    {

        $this->caso= $caso;
        $this->a= $a;
        $this->sala= $sala;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Asignacion de Audiencia")->view('mail.email_asignacion');
    }
}
