<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Igreja;
use Illuminate\Http\Request;
use App\Categoria_lider;

use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){        

        $list = DB::table('users')->select('users.*','igrejas.descricao','categoria_liders.descricao_categoria')
                                    ->leftjoin('igrejas','users.igreja_id','=','igrejas.id')
                                    ->leftjoin('categoria_liders','users.categoria_lider_id','=','categoria_liders.id')                                         
                                    ->orderBy('name', 'asc')                                    
                                    ->paginate(10);                                                        
                        
        return view('adminlte::users/index',compact('list'));
    }

    public function create(){
        $igrejas = Igreja::all();
        $categoria_lideres = Categoria_lider::all();

        return view('adminlte::users/create',compact('igrejas','categoria_lideres'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required',
        ]);


        $user= new User();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->telefone=$request->telefone;
        $user->categoria_lider_id= $request->categoria_lider_id;
        $user->igreja_id= $request->igreja_id;
        $user->password = bcrypt($request->password);
        $user->save();
         
        \Session::flash('mensagem_sucesso','Cadastrado com sucesso!'); 
              
        return  Redirect::to('users');   
     }
}
