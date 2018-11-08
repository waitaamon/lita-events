<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function contact(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::to('contact@lita.co.ke')->send(new ContactForm($request->email, $request->phone, $request->name, $request->message));

        return redirect()->to("/#contact-us")->withSuccess('email sent successfully.');

    }
}
