<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function profile($id){
        $user = User::find($id);
        return view('profile' , compact('user'));
    }

    public function cnprofile($id){
      $user = Auth::user();

      if($id == $user->id){
        return view('cnprofile',compact('user'));
      } else {
        return view('home');
      }
    }

    public function change_profile(){
      if(isset($_POST['change_profile'])){
          if(isset($_POST['seller_status'])){
              $user = Auth::user();
              $user->type = 1;
              $user->save();
              // $status = 1;
              return redirect()->action('ProfileController@profile', ['id' => Auth::user()->id]);
          } else {
              $user = Auth::user();
              $user->type = 0;
              $user->save();
              return redirect()->action('ProfileController@profile', ['id' => Auth::user()->id]);
              
          }
      }
    }

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
