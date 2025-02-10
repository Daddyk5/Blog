<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Example: Store in DB or send an email
        // Contact::create($request->all());

        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
