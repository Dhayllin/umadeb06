
@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Matriz
@endsection
@section('contentheader_title')
	Matriz
@endsection
@section('main-content')
 <div class="container">
    <section id="section-principal" class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title text-center">Detalhes da Matriz </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-12">
                            <h4><strong>Nome:</strong> {{$matriz->descricao}}</h4>
                            <h4><strong>CNPJ:</strong> {{$matriz->cnpj}}</h4>
                            <h4><strong> Telefone/Celular: </strong>{{$matriz->contato}}</h4>                      
                            <h4><strong> Data de Criação: </strong> {{ date('d/m/Y',strtotime($matriz->created_at))}}</h4>
                        </div>
                    </div>
                    <div class="box-footer">                        	
                            <a href="{{ url('matriz/novo') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Voltar</a>                   
                    </div>            
                </div>
            </div>
        </div>
    </section>
</div>         
@endsection