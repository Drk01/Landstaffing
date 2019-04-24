<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;
use App\Country;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function account(){

        return view('myaccount.myaccount')->with([
            'User' => User::where('id',auth()->user()->id)->first(),
            'Phone' => Phone::where('user_id',auth()->user()->id)->first(),
            'Countries' => Country::all()
        ]);
    }

    public function saveData(Request $request){

    }
}
