<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Show the contact form
    public function index()
    {
        return view('contact');
    }

    // Handle form submission
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'password' => 'required|string|min:6',
        ]);

        // Save data to the database
        Contact::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), // Encrypt the password
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Your contact has been saved successfully!');
    }
}
