<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function showForm()
    {
        return view('simpleform');
    }
    public function handleForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        return "Form submitted successfully! Name: $name, Email: $email";
    }
}
