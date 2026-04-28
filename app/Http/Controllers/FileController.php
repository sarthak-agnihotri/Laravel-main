<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function showForm()
    {
        return view('fileupload');
    }
    public function handleFileUpload(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:jpeg,jpg|max:16000',
    ]);

    if ($request->file('file')->isValid()) {

        $file = $request->file('file');

        // Create unique file name
        $filename = time() . '_' . $file->getClientOriginalName();

        // Move file to public/uploads
        $file->move(public_path('uploads'), $filename);
        return "File uploaded successfully: ";

    }
}
}
