<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function personal()
    {
        return $this->belongsTo('App\Personal');
    }
}
