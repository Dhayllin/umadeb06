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
        $total_inscritos_por_igreja1 = DB::table('jovens')->where('igreja_id',1)->count();        
        $total_inscritos_por_igreja2 = DB::table('jovens')->where('igreja_id',2)->count();
        $total_inscritos_por_igreja3 = DB::table('jovens')->where('igreja_id',3)->count();
        $total_inscritos_por_igreja4 = DB::table('jovens')->where('igreja_id',4)->count();
        $total_inscritos_por_igreja5 = DB::table('jovens')->where('igreja_id',5)->count();
        $total_inscritos_por_igreja6 = DB::table('jovens')->where('igreja_id',6)->count();
        $total_inscritos_por_igreja7 = DB::table('jovens')->where('igreja_id',7)->count();
        $total_inscritos_por_igreja8 = DB::table('jovens')->where('igreja_id',8)->count();
        $total_inscritos_igreja_diff = DB::table('jovens')->where('igreja_id',null)->count();
        
        return view('adminlte::home',compact('total_inscritos','total_inscritos_hoje'),compact('total_inscritos_por_igreja1','total_inscritos_por_igreja2','total_inscritos_por_igreja3','total_inscritos_por_igreja4','total_inscritos_por_igreja5','total_inscritos_por_igreja6','total_inscritos_por_igreja7','total_inscritos_por_igreja8','total_inscritos_igreja_diff'));
    }

    public function lideresHome($id){

       $total_inscritos_lideres = DB::table('jovens')->where('igreja_id',$id)->count();  

       return view('adminlte::lideres_home',compact('total_inscritos_lideres'));
    }
}