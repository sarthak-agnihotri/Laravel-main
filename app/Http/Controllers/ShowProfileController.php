<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    }
}
//A Single Action Controller is a controller that handles exactly one action. 
// Instead of creating multiple methods for CRUD operations, you define a single __invoke() method.