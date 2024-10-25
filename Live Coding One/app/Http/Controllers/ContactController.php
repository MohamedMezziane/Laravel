<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('mohamedmezziane19@gmail.com', 'Destinataire')->subject('Nouveau message de contact');
        });

        return redirect('/')->with('success', 'Votre message a bien été envoyé.');
    }
}
