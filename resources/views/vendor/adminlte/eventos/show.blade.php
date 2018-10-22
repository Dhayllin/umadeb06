@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Evento
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Evento<a class="btn btn-xs btn-primary pull-right" href="{{ route('eventos.index') }}"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a></div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">                       
                        <tr>
                            <th>Nome</th>
                            <td>{{ $evento->nome }}</td>
                        </tr>
                        <tr>
                            <th>Descrição</th>
                            <td>{{ $evento->descricao }}</td>
                        </tr>
                        <tr>
                            <th>Data Início</th>
                            <td>{{ date('d/m/Y',strtotime($evento->dt_inicio)) }}</td>
                        </tr>						
                        <tr>
                            <th>Cargo</th>
                            <td>{{ date('d/m/Y',strtotime($evento->dt_fim)) }}</td>
                        </tr>                                          
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection