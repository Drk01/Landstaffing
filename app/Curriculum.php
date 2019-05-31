<?php

namespace App;
use App\CStatus;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function status()
    {
        return $this->belongsToMany('App\Cstatus')->withTimestamps();
    }
}
