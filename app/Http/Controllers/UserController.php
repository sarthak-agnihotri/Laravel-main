<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "Welcome to the user page!";
    }
    public function show($id){
        return "User Id: ".$id;
    }
    public function dashboard(){
        return "Welcome to the dashboard!";
    }
    public function checkAge($age){
        if($age >= 18){
            return "You are an adult.";
        }else{
            return "You are a minor.";
        }
    }
}
