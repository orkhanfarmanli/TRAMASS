<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
// Butun modeller
use App\City;
use App\Basket;
use App\Country;
use App\Orders;
use App\Product;
use App\Product_Category;
use App\User;


class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

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

    public function about(){
    	return view('about');
    }
    public function product() {
  		return view('product');
    }
  	public function product_single() {
  		return view('product_single');
    }

}
