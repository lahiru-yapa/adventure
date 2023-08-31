<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tower;


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
        
        $data = $request->all(); // Get all form data
dd($data);
    // Create a new instance of your model and fill it with the form data
    $model = new Tower();
    $model->fill($data);

    // Save the model to the database
    $model->save();
        // // Validate the incoming request
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        // ]);

        // // Create a new record in the database
        // FormData::create($validatedData);

        return redirect()->route('home.index');
    }
   
}