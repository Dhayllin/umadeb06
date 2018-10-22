@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Eventos
@endsection

@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">Eventos<a class="btn btn-xs btn-primary pull-right" href="{{ route('eventos.create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a></div>
        @if(Session::has('mensagem_sucesso'))
        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
         @endif 
          <div class="panel-body">
                @if($list->count())
            <table class="table table-condensed table-striped">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data Início</th>
                <th>Data Fim</th>                
                <th class="text-right">Opções</th>
              </tr>
            </thead>
            <tbody>
              @foreach($list as $evento)
              <tr>              
                <td>{{ $evento->nome }}</td>
                <td>{{ $evento->descricao }}</td>
                <td>{{  date('d/m/Y',strtotime($evento->dt_inicio)) }}</td>                   
                <td>{{  date('d/m/Y',strtotime($evento->dt_fim)) }}</td>                 
                <td class="text-right">     
                    <a class="btn btn-xs btn-primary" href="{{ route('eventos.show', $evento->id) }}"><i class="glyphicon glyphicon-edit"></i> Visualizar</a>            
                  <a class="btn btn-xs btn-warning" href="#"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                  <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Deletar?')) { return true } else {return false }">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Deletar</button>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="text-center">
               {{ $list->links() }}
              </div>
              @else
              <h3 class="text-center alert alert-info">Não há registros</h3>
              @endif
            </div>
      </div>
    </div>
  </div>
</div>
@endsection