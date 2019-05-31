<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cstatus extends Model
{
    public function curriculum()
    {
        return $this->belongsToMany('App\Curriculum')->withTimestamps();
    }
}
