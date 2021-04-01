<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $username = 'username';
    protected function validator(array $data)
   {
       return Validaor::make($data,[
       'name'=>'required|max:255',
       'username'=>'required|unique:user',
       'email'=>'required|email|max:255|unique:users',
       'password'=>'required|min:6|confirmed',
       'jabatan'=>'required',
       ]);
   }
   protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'jabatan'=> $data['jabatan'],
        ]);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
}

    
   

