<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('badboy', compact('contacts'));
    }

    public function create()
    {
        return view('badboy');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('badboy')->with('success', 'Contact created successfully.');
    }

}
