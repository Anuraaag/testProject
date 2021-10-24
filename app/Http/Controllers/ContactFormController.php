<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormMail;   
use Illuminat\Http\Request;
use Illuminat\Support\Facades\Mail;

class ContactFormController extends Controller
{
   public function create(){
       return view('contact.create');
   }

   public function store(){
        $data = request()->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $hmm = \Mail::to('test@test.com')->send(new ContactFormMail($data));
        session()->flash('message', 'Thanks for  your message. We will be in touch.');
        return redirect('contact');
   }
}