<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var
     */
    public $message;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $phone;

    /**
     * Create a new message instance.
     *
     * @param $email
     * @param $name
     * @param $phone
     * @param $message
     */
    public function __construct($email, $name, $phone, $message)
    {
        //
        $this->message = $message;
        $this->email = $email;
        $this->name = $name;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->email)
            ->subject('Website Contact Form')
            ->markdown('emails.contactForm');
    }
}
