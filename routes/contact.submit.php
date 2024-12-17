<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

Route::post('/contact/submit', function (Request $request) {
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ]);

    \App\Models\Contacts::create([
         'full_name' => $validated['full_name'],
         'email' => $validated['email'],
         'password' => bcrypt($validated['password']),
     ]);

    return back()->with('success', 'Thank you for contacting us!');
})->name('contact.submit');
