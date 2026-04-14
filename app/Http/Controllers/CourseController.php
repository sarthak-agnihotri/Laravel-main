<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course($course){
        return view ('course', ['course'=>$course]);
    }
}
