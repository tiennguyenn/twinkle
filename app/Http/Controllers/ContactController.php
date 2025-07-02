<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|min:255',
        //     'email' => 'required|email|min:255',
        //     'message' => 'required|string|max:5000',
        // ]);
        
        // if ($validator->fails()) {
        //     //return to_route('contact')->withErrors($validator)->withInput();

        //     throw new ValidationException($validator);
        // }

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        dd('aaa');

        // Here you would typically send the email or save the contact message

        return to_route('contact')->with('success', 'Your message has been sent successfully!');
    }
}