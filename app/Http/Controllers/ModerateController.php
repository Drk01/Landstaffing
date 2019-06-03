<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Curriculum;
use App\Cstatus;
use App\Ability;

class ModerateController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Administrador');
    }

    /**
     * Consulta todas los curriculums que no hayan sido revisados y los retorna junto con la vista ModerateCurriculums.index
     *
     * @return array
     */
    public function index(){
        $Usuarios = User::all();
        return view('ModerateCurriculums.index')->with([
            'Usuarios' => $Usuarios
        ]);
    }

    public function edit($id){
      return view('ModerateCurriculums.moderate')->with([
        'Usuario' => User::where('id',$id)->first(),
        'Puestos' => Ability::all()
      ]);
    }
}
