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

    public function update(Request $request, $id){
        $validador = $request->validate([
          'abilities' => 'array|required'
        ]);

        $user = User::where('id',$id)->first();
        foreach ($request->abilities as $key => $ability) {
          $user->abilities()->attach($ability);
        }

        $user->curriculum()->first()->status()->sync(2);

        return redirect(route('ModerateList'));
    }
}
