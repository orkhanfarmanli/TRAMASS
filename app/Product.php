<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

 protected $fillable = [
        'discription', 'count', 'price', 'img', 'title'
    ];

   public function users(){

   	return $this->belongsTo(User::class);
   } 


   public function baskets(){

   	return $this->hasMany(Basket::class);
   }



}
