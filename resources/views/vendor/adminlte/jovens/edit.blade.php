@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Editar I Capacitar
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Joven</div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('jovens.update', $item->id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}                    
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="nome" value="{{ $item->nome }}" class="form-control" id="nome">
                        </div>	
                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="text" name="idade" value="{{ $item->idade }}" class="form-control" id="idade">
                        </div>	
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" value="{{ $item->telefone }}" class="form-control phone" id="Telefone">
                        </div>      
                        <div class="form-group">
                            <label for="telefone">Cargo</label>
                            <input type="text" name="cargo" value="{{ $item->cargo }}" class="form-control" id="cargo">
                        </div>            
                        <div class="form-group">
                            <label for="igreja_id"><strong>Igreja ADEB</strong></label>
                            <select class="form-control " data-placeholder="Selecione" style="width: 100%;"name="igreja_id" id="igreja_id" >
                                <option value="" >Selecione</option>         
                                @foreach($igrejas as $igreja_id)  
                                    <option value="{{$igreja_id->id}}" 
                                              @if($item->igreja_id == $igreja_id->id ))
                                                  {{'selected'}}
                                              @endif>                                                                            
                                              {{$igreja_id->descricao}}
                                @endforeach                              
                            </select>                          
                        </div>	                      	
                        <div class="form-group">
                            <label for="igreja_diff">Outra Igreja</label>
                            <input type="text" name="igreja_diff" value="{{ $item->igreja_diff }}" class="form-control" id="igreja_diff">
                        </div>	
                        <button type="submit" class="btn btn-default">Editar</button>
                        <a href="{{ route('jovens.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection