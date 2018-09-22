@extends('adminlte::layouts.app')
@section('htmlheader_title')
	Editar
@endsection
@section('contentheader_title')
	Editar Matriz
@endsection
@section('main-content')
 <div class="container">
  
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-success">
                <div class="box-header">
              <div class="box-title">                             	                   
				   Dados da Matriz 
              </div>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 10px;">
                  <div class="input-group-btn">
                    <a href="{{url('matriz')}}" class="btn btn-primary"> Listagem &nbsp;<i class="fa fa-list-alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
                <div class="panel-body"> 
                   @if(Session::has('mensagem_sucesso'))
                   <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
                   @endif   
                   {!! Form::model($matriz,['method'=>'PATCH','url'=>'matriz/'.$matriz->id])!!} 

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group has-feedback">
                        <input type="text" value="{{$matriz->descricao}}" class="form-control" placeholder="Nome" name="descricao" value="{{ old('descricao') }}" autofocus/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>             
                    <div class="form-group has-feedback">
                            <input type="text" id="cnpj" value="{{$matriz->cnpj}}" name="cnpj" class="form-control" placeholder="00.000.000/0000-00" data-mask="00.000.000/0000-00">  
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>                   
                    <div class="form-group has-feedback">
                            {!! Form::label('contato','Contato') !!}
                            <input type="text" id="contato" value="{{$matriz->contato}}" name="contato" class="form-control" placeholder="61995405798" data-mask="5500000000000">  
                            <span class="glyphicon glyphicon-cell form-control-feedback"></span>
                    </div>

                    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
</div>        

@endsection 
<script>    
$(document).ready(function() {
var cK = document.getElementById("chkFieldKeep");
var txt = document.getElementById("txtName");

if(cK !== undefined) {
   cK.onclick = function(event) {

       txt.disabled = this.checked;
   }
}


var c = document.getElementById("chkField");
var txt = document.getElementById("txtName");

if(c !== undefined) {
   c.onclick = function(event) {
       txt.disabled = this.checked;
   }
}

});
</script>