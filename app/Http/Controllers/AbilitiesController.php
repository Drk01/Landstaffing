<?php

namespace App\Http\Controllers;

use App\Ability;
use Illuminate\Http\Request;

class AbilitiesController extends Controller
{
    public function __constructor(){
        $this->middleware('auth');
        $this->middleware('hasFulFilledData');
        $this->middleware('Administrativo');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('abilities.index')->with([
            'Abilities' => Ability::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abilities.create')->with([
            'Accion' => 'Crear'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:abilities,name',
            'description' => 'required|unique:abilities,description'
        ]);
        $Ability = new Ability;
        $Ability->name = $request->name;
        $Ability->description = $request->description;
        $Ability->save();

        return redirect(route('abilities.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('abilities.index'))->with([
            'Ability' => Ability::where('id',$id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('abilities.create')->with([
            'Ability' => Ability::where('id',$id)->first(),
            'Accion' => 'Editar'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Ability = Ability::where('id',$id)->first();
        $Ability->name = $request->name;
        $Ability->description = $request->description;
        $Ability->save();

        return redirect(route('abilities.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ability = Ability::where('id',$id)->first();
        $Ability->delete();

        return redirect()->back();
    }
}
