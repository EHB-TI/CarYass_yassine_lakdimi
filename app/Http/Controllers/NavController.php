<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function welcome()
    {
        return view('site.welcome');
    }

    public function about()
    {
        return view('site.about');
    }

    
    public function contact()
    {
        return view('site.contact');
    }


    public function car()
    {
        return view('site.car');
    }

    

   
}
