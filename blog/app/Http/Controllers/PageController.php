<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('guest.welcome');
    }
    public function about()
    {
        return view('guest.about');
        
    }
    public function contacts()
    {
        return view('guest.contacts');

    }
    public function sendContactForm(Request $request)
    {
        //ddd($request->all());
        $validatedData = $request->validate([
            'full_name' => "required",
            'email' => "required | email ",
            'message' => "required"
        ]);
        //ddd($validatedData);

        //invio della email
        //return (new ContactFormMail($validatedData))->render();
        Mail::to('admin@test')->send(new ContactFormMail(($validatedData)));
        return redirect()->back()->with('message', 'Success! Grazie per la tu email ti rispondiamo in 48 ore');
    }
}

