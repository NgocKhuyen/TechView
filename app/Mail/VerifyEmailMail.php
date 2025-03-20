<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerifyEmailMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public function __construct($acc)
    {
        $this->user = $acc;
    }

    public function content() {
        return new Content(
            view: 'emails.verify-email',
        );
    }

    public function build()
    {
        return $this->subject('Xác thực email')
                    ->view('emails.verify-email', ['user' => $this->user]);
    }
}
