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
        return view('errors.503');
      }
    }

    public function change_profile(){
      if(isset($_POST['change_profile'])){
        $user = Auth::user();
          if(isset($_POST['seller_status'])){
              $user->type = 1;
          } else {
              $user->type = 0;
          }
          $user->save();
          return redirect()->action('ProfileController@profile', ['id' => Auth::user()->id]);
      }
    }

    public function create_product($id)
    {
        $user = Auth::user();
        if($id == $user->id){
          return view('create_product');
        } else {
          return view('errors.503');
        }
    }
}
