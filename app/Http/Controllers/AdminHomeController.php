<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        try {
            DB::beginTransaction();
    
            // Create a new instance of your model and fill it with the form data
            $model = new Tower();
            $model->fill($request->all());
    
         
            if ($request->hasFile('image_files')) {
                $imagePaths = [];
    
                foreach ($request->file('image_files') as $image) {
                    $path = $image->store('assets/image', 'public');
                    $imagePaths[] = $path;
                }
                $jsonEncodedPaths = json_encode($imagePaths);

                // Store the JSON-encoded string in the database
                $model->images = $jsonEncodedPaths; // Store the JSON-encoded string
                $model->save();
            }
    
            DB::commit();
    
            return redirect()->route('home.index');
        } catch (\Exception $e) {
            DB::rollBack();
            // Handle the exception, such as logging or displaying an error message
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred']);
        }
    }
   
}