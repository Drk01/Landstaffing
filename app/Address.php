<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = array();

    public function country(){
       return $this->belongsToMany('App\Country')->withTimestamps();
    }

    public function user(){
       return $this->belongsTo('App\User')->withTimestamps();
    }
}
