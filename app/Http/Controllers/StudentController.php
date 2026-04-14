<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function __construct(){
    //     //$this->middleware('check.user');
    //     $this->middleware('check.course');
    // }
    // public function profile(){
    //     $data=[
    //         'name'=>'Auto',
    //         'role'=>'admin',
    //         'id'=>1
    //     ];
    //        return $data;
    // }
    // public function students(){
    //     return "Authorized student";
    // }
    // public function student($name){
    //     return view('student', ['name' => $name]);
    // }

    public function details(){
        $students=[
            ['id'=>1,'name'=>'David'],
            ['id'=>2,'name'=>'Bob'],
            ['id'=>3,'name'=>'John']
        ];
        return view('student', ['students'=>$students]);
    }
}
