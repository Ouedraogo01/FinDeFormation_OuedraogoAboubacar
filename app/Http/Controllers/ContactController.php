<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function showContactForm()
    {
        return view("contact");
    }

    public function submitContactForm(Request $request)
    {

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        return redirect()->route('welcome')->with('success', 'Message envoyé avec succès.');
    }

    public function liste()
    {
        $contacts = Contact::all();

        return view("admin.contact", compact("contacts"));
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contact/liste')->with('success', 'Vous avez supprimé un message.');
    }
}