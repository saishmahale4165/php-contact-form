<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact', ['contacts' => $contacts]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'required|numeric|digits:10',
            'message' => 'required|string|max:1000',
        ]);

        $newMessage = Contact::create($data);
        return redirect()->back()->with('success', 'Message submitted successfully!');
    }
}
