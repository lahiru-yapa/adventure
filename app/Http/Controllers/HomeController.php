<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tower;
use App\Models\review;
use App\Models\Booking;

use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index() 
    {
      
        return view('Pages.admin.index');
    }

    public function indexuser(Request $request)
    {
       
        return view('Pages.index');
    }

    public function destination1($id)
    {
       
        $tours = Tower::where('category', $id)->get();
       
        return view('Pages.destination.destination1', compact('tours'));
    }

    public function booking(Request $request)
    {
      
        try{
            DB::beginTransaction();
    
            // Create a new instance of your model and fill it with the form data
            $model = new booking();
         
            $model->fill($request->all());
          
            $model->save();
          
            DB::commit();
       
        }   catch (\Exception $e) {
           dd($e);
            // Handle the exception, such as logging or displaying an error message
            return $e;
        }
      
    }
    

    public function gallery(Request $request)
    {
       
        return view('Pages.gallery');
    }

    public function contact(Request $request)
    {
       
        return view('Pages.contact');
    }

    public function destinatioDetails($id)
    {
        $towersList = Tower::latest()->take(5)->get();
     
      $tour = Tower::where('id', $id)->first();
        return view('Pages.destination.destinationDetails', compact('tour','towersList'));
    }

    public function review(Request $request)
    {

        try{
            DB::beginTransaction();
    
            // Create a new instance of your model and fill it with the form data
            $model = new review();
         
            $model->fill($request->all());
          
            $model->save();
          
            DB::commit();
       
        }   catch (\Exception $e) {
           
            // Handle the exception, such as logging or displaying an error message
            return $e;
        }
      
          
        return view('Pages.contact');
    }
    
    
}

