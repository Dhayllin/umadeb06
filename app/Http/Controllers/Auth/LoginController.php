<?php

namespace App\Http\Controllers\Auth;

use DB;
use App\User;
use App\Joven;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

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
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('adminlte::auth.login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated($request){
         
         $user = User::where('email',$request->email)->first();

         if($user->categoria_lider_id == 3){
             return Redirect::to('home');
         }

         $total_inscritos_lideres = DB::table('jovens')->where('igreja_id',$user->igreja_id)->count();  

         return view('adminlte::lideres_home',compact('total_inscritos_lideres','user'));
    }   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

  
}
