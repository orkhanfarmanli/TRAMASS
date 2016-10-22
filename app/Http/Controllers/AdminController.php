<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
     public function index()
     {
          return view('admin.admin');
     }
     public function user()
     {
          return view('admin.user');
     }
}
