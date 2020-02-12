<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
//   public function show(Details)
//   {
// $post = \DB::table('Details')->where()
//   };







   public function index()
   {
       return view('/');
   }
   public function about()
   {
       return view('about');
   }
   public function doctor()
   {
       return view('doctor');
   } 
   public function departments()
   {
       return view('departmentssp');
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
