<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name','first_name','gender', 'email', 'tel', 'address', 'building', 'detail','content']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name','first_name','gender', 'email', 'tel', 'address', 'building', 'detail', 'content']);
        return view('thanks');
    }
}
