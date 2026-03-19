<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'phone'   => 'nullable|string|max:30',
            'service' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        // Save to DB
        $submission = ContactSubmission::create($validated);

        // Send email
        Mail::to('contact@elevatebeveragesolution.ie')
            ->send(new ContactFormMail($submission));

        return back()->with('success', 'Thank you! We\'ll be in touch within 24 hours.');
    }
}
