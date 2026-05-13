<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class FormsController extends Controller
{
    //
    public function showForm()
    {
        return view('Forms');
    }

    public function submitForm(StoreUserRequest $request)
    {
        // Handle form submission logic here
        return "Form submitted successfully!";
    }
}
