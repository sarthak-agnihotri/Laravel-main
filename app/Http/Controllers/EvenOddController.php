<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenOddController extends Controller
{
    //
    public function checkNumber($number){
        if($number%2==0){
            $result="The number $number is even.";
        }else{
            $result="The number $number is odd.";
        }
        return view('evenodd',compact('number','result'));
    }
}
