<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);

        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('welcome'); // Your contact form view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'message' => 'required|string',
            'is_signup' => 'nullable|boolean',
        ]);

        $filePath = $request->file('file')->store('contacts', 'public');

        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'location' => $validated['location'],
            'file' => $filePath,
            'message' => $validated['message'],
            'is_signup' => $request->has('is_signup'),
            'user_id' => Auth::id() ?? 1, // fallback to 1 if guest
        ]);

        return redirect()->route('home')->with('success', 'Your message has been sent!');

//        return redirect('dashboard')>with('success', 'Your message has been sent!');
    }

    public function destroy(Contact $contact)
    {
        // Check if the contact exists, if not, redirect with an error message
        if (!$contact) {
            return redirect()->route('contacts.index')->with('error', 'Contact not found.');
        }

        // Delete the file if it exists
        if ($contact->file && \Storage::disk('public')->exists($contact->file)) {
            \Storage::disk('public')->delete($contact->file);
        }

        // Delete the contact
        $contact->delete();

        // Redirect with success message
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }



}
