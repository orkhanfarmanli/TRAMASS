<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
     public function home()
     {
          return view('home');
     }

     public function about()
     {
          return view('about');
     }
     public function product()
     {
          return view('product');
     }
     public function product_single()
     {
          return view('product_single');
     }

}
