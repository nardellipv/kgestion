<?php

namespace kindergestion\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use kindergestion\Mail\Contact;

class ContactMailController extends Controller
{
    public function send(Request $request)
    {

        $valueArray = [
            'name' => $request->name,
            'email' => $request->email,
            'subjet' => $request->subjet,
            'message' => $request->message,
        ];


        Mail::to('info@gkinder.com')->send(new Contact($valueArray));
//        Session::flash('message', 'Su email fue enviado, le responderemos a la brevedad. Muchas gracias.');
        return Redirect::to('/');
    }
}
