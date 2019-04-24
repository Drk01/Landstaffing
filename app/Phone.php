<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $guarded = array();

    public function user(){
        $this->belongsTo('App\User');
    }
}
