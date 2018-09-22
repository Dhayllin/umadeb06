@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Encomendas
@endsection
@section('contentheader_title')
    Encomendas
@endsection
@section('main-content')
  <div class="container">  
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-success">
                <div class="box-header">
              <div class="box-title">                             	                   
					Informe a baixo as informações da encomenda		           	
              </div>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 10px;">
                  <div class="input-group-btn">
                    <a href="{{url('encomendas')}}" class="btn btn-primary"> Listagem &nbsp;<i class="fa fa-list-alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
                <div class="panel-body"> 
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
                    @endif     
                    @if(Request::is('*/editar'))
                        {{ Form::model($encomenda,['method'=>'PATCH','url'=>'encomendas/'.$encomenda->id]) }}
                    @else                            
                    {!! Form::open(['url'=>'encomendas/salvar']) !!}                 
                    @endif        
                    
                    {!! Form::label('descricao','Destinatário') !!}
                    {!! Form::input('text','descricao',null,['class'=>'form-control','autofocos','required','placeholder' => 'Descrição']) !!}   
                    <br>
                    {!! Form::label('nota_fiscal','Nº Nota Fiscal') !!}
                    {!! Form::input('text','nota_fiscal',null,['class'=>'form-control','autofocos','required']) !!}
                    <br> 
                    <div class="col-md-6">
                    {!! Form::label('user_id_matriz','Matriz') !!} 
                       <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecione" style="width: 100%;"name="user_id_matriz" id="user_id_matriz" >
                              <option value="" >Selecione</option>         
                          @foreach($user_id_matrizes as $user_id_matriz)  
                              <option value="{{$user_id_matriz->id}}" 
                                              @if($encomenda->user_id_matriz == $user_id_matriz->id && Request::is('*/editar'))
                                                  {{'selected'}}
                                              @endif>                                                                            
                                              {{$user_id_matriz->name }}
                              </option>
                          @endforeach
                       </select>                 
                    </div>                    
                    {!! Form::hidden('status_encomenda', '1') !!}
                    {!! Form::hidden('user_id_cadastro', Auth::id()) !!} 
                    <br>           
                    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                                     
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
</div>                
@endsection 

