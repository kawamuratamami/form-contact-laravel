<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $genders = Contact::$genders;
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name','first_name', 'email', 'tell', 'address', 'building','content']);

        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name','first_name', 'email', 'tell', 'address', 'building', 'content']);
        Contact::create($contact);

        return view('thanks');
    }

    public function admin()
    {
        $contacts = Contact::simplePaginate(5);
        return view('admin', ['contacts' => $contacts]);
    }

    public function register(RegisterRequest $request)
    {
        return view('register');
    }

    public function login(RegisterRequest $request)
    {
        return view('login', ['register' => $register]);
    }
}
