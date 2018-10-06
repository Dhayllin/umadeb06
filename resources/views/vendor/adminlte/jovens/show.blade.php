@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Inscritos I Capacitar
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Joven<a class="btn btn-xs btn-primary pull-right" href="{{ route('jovens.index') }}"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a></div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">                       
                        <tr>
                            <th>Nome</th>
                            <td>{{ $item->nome }}</td>
                        </tr>
                        <tr>
                            <th>Idade</th>
                            <td>{{ $item->idade }}</td>
                        </tr>
                        <tr>
                            <th>Telefone</th>
                            <td>{{ $item->telefone }}</td>
                        </tr>						
                        <tr>
                            <th>Cargo</th>
                            <td>{{ $item->cargo }}</td>
                        </tr>
                        <tr>
                            <th>Igreja ADEB</th>
                            <td>{{ $item->igreja_id }}</td>
                        </tr>	
                        <tr>
                            <th>Outra Igreja</th>
                            <td>{{ $item->igreja_diff }}</td>
                        </tr>                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection