<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index')->withContacts($contacts);
    }

    public function edit()
    {
        return view('contact.edit');
    }

    public function create()
    {
        return view('contact.create');
    }

    public function show(Contact $contact)
    {
        return view('contact.view', compact('contact'));
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function store()
    {
        request()->validate([
            'email' => 'required|max:255',
            'description' => 'required',
        ]);
        // $contact = new Contact();
        // $contact->email = request('email');
        // $contact->description = request('description');
        // $contact->save();

        Contact::create(request(['email', 'description']));
        return redirect('/');
    }
}
