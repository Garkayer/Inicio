<?php

namespace App\Http\Controllers;

use IlluminateHttpRequest;
use AppHttpRequests;
use Mail;

class ContactUsController extends Controller

    public function index()
    
        return view('contact');
    

    public function handleForm(Request $request)
    email', 'message_body' => 'required