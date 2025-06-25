<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     *
     * @return \Inertia\Response
     */
    public function show()
    {
        return Inertia::render('Contact');
    }

    /**
     * Handle the contact form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:10',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        dd('bbb');

        // Here you would typically send the email or save the contact message

        return to_route('contact')->with('success', 'Your message has been sent successfully!');
    }
}