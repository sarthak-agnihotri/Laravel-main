<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "This is my index function";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "This is my create function";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "This is my show function  $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "This is my edit function $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


/*| Method  | Purpose                      | HTTP Verb | URL Example        |
| ------- | ---------------------------- | --------- | ------------------ |
| index   | Show all resources           | GET       | `/posts`           |
| create  | Show form to create resource | GET       | `/posts/create`    |
| store   | Store new resource           | POST      | `/posts`           |
| show    | Show single resource         | GET       | `/posts/{id}`      |
| edit    | Show form to edit resource   | GET       | `/posts/{id}/edit` |
| update  | Update resource              | PUT/PATCH | `/posts/{id}`      |
| destroy | Delete resource              | DELETE    | `/posts/{id}`      |*/
