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

    public function blogSingle()
    {
        return view('site.blog-single');
    }

    public function blog()
    {
        return view('site.blog');
    }

    public function carSingle()
    {
        return view('site.car-single');
    }

    public function contact()
    {
        return view('site.contact');
    }

    

    public function services()
    {
        return view('site.services');
    }
}
