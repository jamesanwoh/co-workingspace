<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\user1;
use App\vendor1;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'Username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Firstname' => ['required', 'string', 'max:255'],
            'Lastname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'integer', 'min:11'],
            'Address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_as' => ['required', 'string', 'max:255'],
            'vendor_name' => ['string', 'max:255'],
            'vendor_address' => ['string', 'max:255'],
            'vendor_number' => ['string', 'max:255'],

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
            if($data['role_as'] == 'user'){
                user1::create([

            'Username'      => $data['Username'],
            'email'         => $data['email'],
            'Firstname'     => $data['Firstname'],
            'Lastname'      => $data['Lastname'],
            'gender'        => $data['gender'],
            'phone_number'  => $data['phone_number'],
            'Address'       => $data['Address'],
            'password'      => Hash::make($data['password']),
            'role_as'       => $data['role_as'],
            'vendor_name'       => $data['vendor_name'],
            'vendor_address'       => $data['vendor_address'],
            'vendor_number'       => $data['vendor_number'],
          ]);
    }
            if($data['role_as'] == 'vendor'){
            vendor1::create([
            'Username'      => $data['Username'],
            'email'         => $data['email'],
            'Firstname'     => $data['Firstname'],
            'Lastname'      => $data['Lastname'],
            'gender'        => $data['gender'],
            'phone_number'  => $data['phone_number'],
            'Address'       => $data['Address'],
            'password'      => Hash::make($data['password']),
            'role_as'       => $data['role_as'],
            'vendor_name'       => $data['vendor_name'],
            'vendor_address'       => $data['vendor_address'],
            'vendor_number'       => $data['vendor_number'],
        ]);
    }
            if($data['role_as'] == 'user' OR 'vendor'){
                  return  User::create([
            'Username'      => $data['Username'],
            'email'         => $data['email'],
            'Firstname'     => $data['Firstname'],
            'Lastname'      => $data['Lastname'],
            'gender'        => $data['gender'],
            'phone_number'  => $data['phone_number'],
            'Address'       => $data['Address'],
            'password'      => Hash::make($data['password']),
            'role_as'       => $data['role_as'],
            'vendor_name'       => $data['vendor_name'],
            'vendor_address'       => $data['vendor_address'],
            'vendor_number'       => $data['vendor_number'],
        ]);
    }
                }
}
