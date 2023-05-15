<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected function getContacts() {
        return collect(Contact::all());
    }

// Index
    public function index() {
        $contacts = $this->getContacts();
        return view('contacts.index', compact('contacts'));
    }

// Read / Show
    public function show($id) {
        $contact = Contact::findOrFail($id);
        return view('contacts.show')->with('contact', $contact);
    }

// Create
    public function create() {
        return view('welcome');
    }

    public function store(Request $request) {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->company = $request->company;

        $contact->save();

        return redirect()->route('contacts.index');
    }

// Update
    public function edit($id) {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit')->with('contact', $contact);
    }

    public function update(Request $request) {        
        // Contact::where('id', $request->id)
        // ->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'company' => $request->company,
        // ]);


        $contact = Contact::findOrFail($request->id);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->company = $request->company;

        $contact->save();

        return redirect()->route('contacts.index');
    }

// Delete
    public function delete($id) {
        Contact::findOrFail($id)->delete();
        
        return redirect()->route('contacts.index');
    }
}