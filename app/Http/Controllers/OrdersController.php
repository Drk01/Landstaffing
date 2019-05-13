<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Ability;
use App\Personal;
use App\Http\Requests\OrdersRequest;

class OrdersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Empleador');
        $this->middleware('hasFulFilledData');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index')->with([
            'Orders' => Order::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create')->with([
            'abilitiesJS' => json_encode(Ability::all()),
            'abilities' => Ability::all(),
            'Accion' => 'Crear'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrdersRequest $request)
    {
        $User = User::where('id',auth()->user()->id)->first();
        $User->orders()->create([
            'name' => $request->name,
            'description' => $request->description,
            'startAt' => date('Y-m-d H:i:s', strtotime($request->startDate.' '.$request->startTime)),
            'endAt' => date('Y-m-d H:i:s', strtotime($request->endDate.' '.$request->endTime)),
            'city' => $request->city,
            'street' => $request->street,
            'extN' => $request->extN,
            'references' => $request->references
        ]);

        $Order = Order::where('user_id',auth()->user()->id)->latest()->first();

        foreach ($request->numberP as $key => $value) {
            for ($i=0; $i < $value; $i++) {
                $Order->personals()->create([
                    'ability_id' => $request->personalT[$key]
                ]);
            }
        }
        return redirect(route('orders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $IDs = Personal::where('order_id',$id)->get()->pluck('ability_id');

        $Personals = [];
        foreach (Ability::all() as $key => $ability) {
            $Personals = $Personals + [$ability->id => Personal::where('order_id',$id)->where('ability_id',$key+1)->count()];
        }

        return redirect(route('orders.index'))->with([
            'SOrder' => Order::where('id',$id)->first(),
            'Personals' => $Personals,
            'Abilities' => Ability::all()
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
        $Orden = Order::where('id',$id)->first();
        $FechaInicio = $Orden->startAt;
        if(now()->diffInDays($FechaInicio) < 1){
            return redirect()->back()->withErrors(['No puedes modificar una orden que esté a menos de 24 horas de ocurrir']);
        }
        $startDate = explode(' ',$Orden->startAt);
        $endDate = explode(' ',$Orden->endAt);

        return view('orders.create')->with([
            'abilitiesJS' => json_encode(Ability::all()),
            'abilities' => Ability::all(),
            'Orden' => $Orden,
            'Accion' => 'Editar',
            'startDate' => $startDate,
            'endDate' => $endDate
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
