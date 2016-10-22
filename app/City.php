<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

     public function country()
     {

          return $this->belongsTo(Country::class);
     }

     public function users()
     {

          return $this->hasMany(User::class);
     }
}
