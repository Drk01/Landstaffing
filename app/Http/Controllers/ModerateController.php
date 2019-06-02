<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Curriculum;
use App\Cstatus;
use App\Abilities;

class ModerateController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Administrador');
    }
}
