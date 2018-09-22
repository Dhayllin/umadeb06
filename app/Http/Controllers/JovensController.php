<?php

namespace App\Http\Controllers;

use DB;
use App\Joven;
use App\Igreja;
use Illuminate\Http\Request;
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
        return "INDE";
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
        \Session::flash('mensagem_sucesso_warning','Você de inscrever mais participantes.');    
              
        return  Redirect::to('jovens/create');     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
