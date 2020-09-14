<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

  public function create() {
    return view('contact.create');
  }

  public function store(Request $request) {
    $data = $request->validate([
      'email'   => 'required|email',
      'name'    => 'required',
      'message' => 'required'
    ]);

    // Mail::to("test@test.com")->send(new ContactFormMail($data));
    
   return redirect('contact')->with('message', 'Thanks for the message stay in touch');


    
  }

}
