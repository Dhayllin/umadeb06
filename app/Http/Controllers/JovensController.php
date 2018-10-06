<?php

namespace App\Http\Controllers;

use DB;
use App\Joven;
use App\Igreja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;


class JovensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $list = DB::table('jovens')->select('jovens.*','igrejas.descricao')->
                        leftjoin('igrejas','jovens.igreja_id','=','igrejas.id')->
                        orderBy('nome', 'asc')->
                        paginate(10);

        return view('adminlte::jovens/index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $igrejas = Igreja::all();
                         
        return view('adminlte::jovens/create',compact('igrejas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    
    {
        $this->validate($request,[
            'nome'=>'required|max:255',
        ]);


        $joven= new Joven();
        $joven =  $joven->create($request->all());      
         
        \Session::flash('mensagem_sucesso','Cadastrado com sucesso!');
        \Session::flash('mensagem_sucesso_warning','Você pode inscrever mais participantes.');    
              
          return  Redirect::to('/');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function  showLiderSetor($id)
    {
        
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $item = Joven::findOrFail($id);
       $igrejas = Igreja::all();
       

       return view('adminlte::jovens/edit',compact('item','igrejas'));
    }

    public function editLiderSetorial($id)
    {
       $item = Joven::findOrFail($id);
       $igrejas = Igreja::all();
       

       return view('adminlte::jovens/edit_lider_setorial',compact('item','igrejas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request,[
            'nome'=>'required|max:255',             
            'telefone'=>'required'           
        ]);

        $item = Joven::findOrFail($id);
        $item->nome = $request->nome;      
        $item->idade= $request->idade;
        $item->telefone=$request->telefone;
        $item->cargo=$request->cargo;
        $item->igreja_id= $request->igreja_id;
        $item->igreja_diff= $request->igreja_diff;       
        $item->save();
        
        return view('adminlte::jovens/show',compact('item')); 
    }


    public function updateLiderSetor(Request $request, $id)
    {
              
        return "view('adminlte::jovens/show_lider_setorial',compact('item'))"; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Joven::findOrFail($id);
        $item->delete();

        \Session::flash('mensagem_sucesso','Deletado com sucesso!');

        return Redirect::to('jovens');
    }

   public function lideresIndex($id){

        $list = DB::table('jovens')->select('jovens.*','igrejas.descricao')
                                    ->where('igreja_id',$id)
                                    ->leftjoin('igrejas','jovens.igreja_id','=','igrejas.id')                                
                                    ->orderBy('nome', 'asc')
                                    ->paginate(10);

        return  view('adminlte::jovens/lideres_index',compact('list'));
   }

   //  aqui o líder setorial tem acesso aos jovens de cada igreja 
   // e ainda pode editar ou excluir estando na igreja X

   public function lideresIndexSetorial($id){

    $list = DB::table('jovens')->select('jovens.*','igrejas.descricao')
                                ->where('igreja_id',$id)
                                ->leftjoin('igrejas','jovens.igreja_id','=','igrejas.id')                                
                                ->orderBy('nome', 'asc')
                                ->paginate(10);

    return  view('adminlte::jovens/index_lider_setorial',compact('list'));
}
}
