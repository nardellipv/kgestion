<?php

namespace gkinder\Http\Controllers\Auth;

use gkinder\Http\Controllers\Controller;
use gkinder\User;
use gkinder\School;
use Illuminate\Foundation\Auth\RegistersUsers;
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
    protected $redirectTo = 'school/home';

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
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \gkinder\User
     */
    protected function create(array $data)
    {
        $school = School::create([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_type' => 'ADMIN',
            'password' => bcrypt($data['password']),
            'school_id' => $school->id,
        ]);


        return $user;
    }
}
