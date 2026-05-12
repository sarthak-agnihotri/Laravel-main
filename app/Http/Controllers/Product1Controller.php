<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "This is the index method of Product1Controller";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "This is the create method of Product1Controller";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return "This is the store method of Product1Controller";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "This is the show method of Product1Controller for product with id: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return "This is the edit method of Product1Controller for product with id: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return "This is the update method of Product1Controller for product with id: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return "This is the destroy method of Product1Controller for product with id: " . $id;
    }
}