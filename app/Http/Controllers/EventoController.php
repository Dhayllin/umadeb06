<?php

namespace App\Http\Controllers;

use DB;
use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Authenticated;

class EventoController extends Controller
{
    public function index(){

        $list = DB::table('eventos')->select('eventos.*')->paginate(10);

        return view('adminlte::eventos/index',compact('list'));
    }

    public function create(){
        return view('adminlte::eventos/create');
    }

    public function store(Request $request){
        
        $this->validate($request,[
            'nome'=>'required|max:255',             
            'dt_inicio'=>'required'           
        ]);

        $evento = new Evento();
        $evento = $evento->create($request->all());      

        return view('adminlte::eventos/show',compact('evento'));
    }

    public function calendario()
    {
        return view('adminlte::agenda/index');
    }

    public function api()
    {
        $eventos = DB::table('eventos')->select('eventos.*')->get();

        $listaEventos = new Collection();

        foreach ($eventos as $event) {
           
            $evento = new Evento();
            $evento->url = $event->id;
            $evento->title = $event->nome;
            $evento->start =$event->dt_inicio;            
            $evento->allDay = true;
            $evento->backgroundColor = "#66CDAA";
            $evento->color = "#66CDAA";
            $evento->icon = "music";
            $listaEventos->push($evento);
        }
  
          return  $listaEventos;
    }

}
