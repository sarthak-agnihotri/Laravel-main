<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=[
            ["id" => 1, "title" => "Book One", "author" => "Author A"],
            ["id" => 2, "title" => "Book Two", "author" => "Author B"],
            ["id" => 3, "title" => "Book Three", "author" => "Author C"],
        ];
        return response()
        ->json($books)
        ->header('X-Header-One','BookListHeader')
        ->header('Content-Type', 'application/json');
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
        $books=[
            ["id" => 1, "title" => "Book One", "author" => "Author A"],
            ["id" => 2, "title" => "Book Two", "author" => "Author B"],
            ["id" => 3, "title" => "Book Three", "author" => "Author C"],
        ];
        $book = collect($books)->firstWhere('id', (int)$id);
        if(!$book){
            return response()->json(["message"=>"Book not found"],404);
        }
        return response()
            ->json($book)
            ->cookie('book_id', $id, 60); 
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

//An API Controller is designed to serve data in JSON format, typically used in RESTful APIs for mobile apps, 
// JavaScript frontends, or external integrations.
/*| Method  | Purpose              | HTTP Verb | URL Example       | Returns |
| ------- | -------------------- | --------- | ----------------- | ------- |
| index   | List all resources   | GET       | `/api/posts`      | JSON    |
| store   | Store a new resource | POST      | `/api/posts`      | JSON    |
| show    | Show single resource | GET       | `/api/posts/{id}` | JSON    |
| update  | Update a resource    | PUT/PATCH | `/api/posts/{id}` | JSON    |
| destroy | Delete a resource    | DELETE    | `/api/posts/{id}` | JSON    |
 */