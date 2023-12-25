<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
        use Queueable, SerializesModels;
    public $details;
    /**
    * Create a new message instance.
    * @return void
    */
    public function __construct($details)
    {
    $this->details = $details;
    }
    /**
    * Get the message envelope.
    * @return \Illuminate\Mail\Mailables\Envelope
    */
    public function envelope() {
    return new Envelope(
    subject: $this->details['subject'],
    );
    }
    public function content()
    {
    return new Content(
    view: 'Mails.mail',
    );
    }

}
