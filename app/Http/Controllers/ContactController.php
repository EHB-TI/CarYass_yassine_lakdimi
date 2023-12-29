<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail; // Ajoutez cette ligne

class ContactController extends Controller
{
    public function create()
    {
        return view('site.contact');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        // Envoyer un email à l'administrateur
        Mail::to('yassine.lakdimi@student.ehb.be')->send(new ContactMail($contact));

        return redirect('contact')->with('status', 'Message envoyé avec succès!');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('admin.index', compact('contacts'));
    }
}
