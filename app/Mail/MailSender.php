<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;
    public $title,$body,$link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title,$body,$link)
    {
        $this->link=$link;
        $this->body=$body;
        $this->title=$title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->title)->view('admin.dashboard.mail');
    }
}