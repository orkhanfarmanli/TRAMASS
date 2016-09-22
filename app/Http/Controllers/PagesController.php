<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function profile(){
        return view('profile');
    }

    public function cnprofile(){
    	return view('cnprofile');
    }

    public function about(){
    	return view('about');
    }
    // public function login(){
    // 	return view('login');
    // }
    //
    // public function register(){
    // 	return view('register');
    // }
    //
    // public function forgot_password(){
    //     return view('reset');
    // }

}
