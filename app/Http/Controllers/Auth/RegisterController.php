<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\Address;
use App\Country;
use App\Phone;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/panel';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'lastname' => ['required', 'string'],
            'motherLastname' => ['required','string'],
            'country' => ['required','numeric','exists:countries,id'],
            'state' => ['required','string'],
            'city' => ['required','string'],
            'street' => ['required','string'],
            'extN' => ['required','numeric','min:1'],
            'account' => ['required','numeric','min:2','max:3']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User;
        $user->name = $data['name'];
        $user->lastname = $data['lastname'];
        $user->motherLastname = $data['motherLastname'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();
        $user->address()->create([
            'calle' => $data['street'],
            'estado' => $data['state'],
            'ciudad' => $data['city'],
            'extNumber' => $data['extN'],
            'reference' => $data['observations']
        ]);
        $user->roles()->attach($data['account']);
        $address = Address::where('user_id',$user->id)->first();
        $address->country()->attach($data['country']);
        return $user;
    }
}
