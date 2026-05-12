<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\checkUpperCase;

class FormController extends Controller
{
    //
    // public function showForm()
    // {
    //     return view('simpleform');
    // }
    // public function handleForm(Request $request)
    // {
    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     return "Form submitted successfully! Name: $name, Email: $email";
    // }
    public function showForm()
    {
        return view('form');
    }
    public function submitform(Request $request)
    {
        $request->validate([
            'name' => ['required','min:3','max:6', new checkUpperCase],
            'email' => 'required|email',
        ],
        [//custom error messages
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 3 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
        ]);
        return "Form submitted successfully!";
    }
}
