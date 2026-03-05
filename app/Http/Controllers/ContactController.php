<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'nom'    => 'required|string|max:100',
            'email'  => 'required|email',
            'projet' => 'required|string|max:2000',
        ]);

        Mail::to('guideon.contact@gmail.com')
            ->send(new ContactMail(
                $validated['nom'],
                $validated['email'],
                $validated['projet']
            ));

        return back()->with('success', 'Votre demande a bien été envoyée !');
    }
}
