<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function address(){
        $this->belongsToMany('App\Address');
    }
}
