<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
//   public function show(Details)
    //   {
    // $post = \DB::table('Details')->where()
    //   };

    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function Frames()
    {
        return view('frames');
    }
    public function Services()
    {
        return view('services');
    }
    public function contact()
    {
        return view('contact');
    }
    public function appointment()
    {
        return view('appointment');
    }
}