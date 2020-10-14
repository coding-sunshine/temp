<?php

namespace App\Http\Controllers\Auth;

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
    protected $redirectTo = '/home';

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
            'first_name' => 'required|max:255',               
            'last_name'=>'required|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username'=>'required|max:255',
            'password' => ['required'],
            'title'=>'required|max:255',
            'department'=>'required|max:255',
            'office_phone'=>'required|numeric|',
            'mobile_phone'=>'required|numeric|',
            'home_phone'=>'required|numeric|',
            'signature'=>'nullable',
            'secondary_email'=>'required',
            'fax'=>'nullable',
            'address_street'=>'nullable',
            'address_state'=>'nullable',
            'address_city'=>'nullable',
            'address_country'=>'nullable',
            'address_postal_code'=>'nullable',
            'profile_image'=>'nullable',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
    }
}
