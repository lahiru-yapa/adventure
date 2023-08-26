<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }

    public function indexuser(Request $request)
    {
       
        return view('Pages.index');
    }

    public function destination1(Request $request)
    {
       
        return view('Pages.destination.destination1');
    }
    
    public function gallery(Request $request)
    {
       
        return view('Pages.gallery');
    }

    public function contact(Request $request)
    {
       
        return view('Pages.contact');
    }
    
    
}