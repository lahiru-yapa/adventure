<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() 
    {
        return view('Pages.admin.index');
    }

    public function createNew() 
    {
        return view('Pages.admin.newTour');
    }
    
    public function create(Request $request)
    {
        dd($request->all());
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new record in the database
        FormData::create($validatedData);

        return redirect()->route('form-success');
    }
   
}