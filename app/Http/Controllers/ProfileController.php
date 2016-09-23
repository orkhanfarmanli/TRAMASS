<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        // return $user;

        if($user->id == Auth::user()->id){
            return view('profile' , compact('user'));
        } else {
            return view('/home');
        }
    }
    // public function showMenu(User $user)
    // {
    //     // return $user;
    //
    //     return view('layouts.main_layout' , compact('user'));
    // }
}
