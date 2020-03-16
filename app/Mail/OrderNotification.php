<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $request;
    public function __construct()
    {
      //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('noreply@app-show.net', 'Noreply')
           ->subject("Brand's Saripati Ayam")
           ->markdown('mail.example')
           ->with([
               'name' => 'Notifikasi Email',
               'link' => 'www.brandsworld.co.id'
           ]);
    }
}
