<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Ability;
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
            'abilities' => Ability::all()
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
