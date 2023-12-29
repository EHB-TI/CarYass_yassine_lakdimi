<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->view('admin.index')
                    ->with([
                        'name' => $this->contact->name,
                        'email' => $this->contact->email,
                        'subject' => $this->contact->subject,
                        'message' => $this->contact->message,
                    ]);
    }
}
