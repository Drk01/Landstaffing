<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function country(){
        $this->belongsToMany('App\Country');
    }
}
