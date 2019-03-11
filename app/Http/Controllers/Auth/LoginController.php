<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo ='';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

   public function redirectTo(){

        return '/home';

    }
    


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   
    // funcion que solo permite dejar pasar al usuario a la rutas si hace sesion
    /*public function __construct()
    {
        //$this->middleware('guest')->except('logout');

        $this->middleware('auth', ['only' => 'showLoginForm']);
    }


    // retorna a vista login
    public function showLoginForm(){

        return view('auth/login');
    }


    // funcion para inciar sesion
    public function login(){

           return view('welcome');// return redirect()->route('welcome');        
    }*/
}
