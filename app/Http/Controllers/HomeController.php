<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;
use App\Country;
use App\Address;

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
            'Countries' => Country::all()
        ]);
    }

    public function saveData(Request $request){
        $Validator = $request->validate([
            'name' => 'string|required',
            'lastname' => 'string|required',
            'motherLastname' => 'string|required',
            'company' => 'string|required|unique:users,empresa',
            'email' => 'required|email',
            'tel' => 'required|numeric',
            'state' => 'required|string',
            'city' => 'required|string',
            'street' => 'required|string',
            'extNumber' => 'required|numeric|min:1',
            'references' => 'string',
            'profile-picture' => 'image',
            'country' => 'required|exists:countries,id'
        ]);

        if ($request->hasFile('profile-picture')) {
            $image = $request['profile-picture'];
            $image->move(public_path(). '/storage',auth()->user()->id.'.'.$request['profile-picture']->getClientOriginalExtension());
        }

        $user = User::where('id',auth()->user()->id)->first();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->motherLastname = $request->motherLastname;
        $user->email = $request->email;
        $user->empresa = $request->company;
        if ($request->hasFile('profile-picture')) {
            $user->foto = auth()->user()->id.'.'.$request->file('profile-picture')->getClientOriginalExtension();
        }
        $user->save();

        $Address = Address::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'estado' => $request->state,
                'ciudad' => $request->city,
                'calle' => $request->street,
                'reference' => $request->references,
                'extNumber' => $request->extNumber
            ]
        );
        $Address->country()->detach();
        $Address->country()->attach($request->country);

        $phone = Phone::updateOrCreate(
            ['user_id' => auth()->user()->id],
            ['phone' => $request->tel]
        );

        return redirect(route('account'));
    }
}
