<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use DB;
use App\Joven;
use Illuminate\Support\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
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
     * @return Response
     */
    public function index()
    {
        $total_inscritos = Joven::all()->count();
        $total_inscritos_hoje= DB::table('jovens')->whereDate('created_at', date('Y-m-d',strtotime(Carbon::today())))->count();
        return view('adminlte::home',compact('total_inscritos'),compact('total_inscritos_hoje'));
    }
}