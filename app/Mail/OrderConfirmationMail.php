<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Invoice;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $id;
    public $invoice;
    // public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->invoice = Invoice::find($id);

        //
        // $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from shakibur rahman')
                    ->view('emails.confirmationmail')
                    ->with('invoice',$this->invoice);
    }
}
