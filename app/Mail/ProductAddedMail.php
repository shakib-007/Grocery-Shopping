<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductAddedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sku;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sku)
    {
        //
        $this->sku = $sku;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('mail from grocery')
                    ->view('emails.productmail')->with('sku',$this->sku);
    }
}
