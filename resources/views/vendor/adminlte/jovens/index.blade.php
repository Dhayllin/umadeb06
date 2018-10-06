@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Inscritos I Capacitar
@endsection

@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">I Capacitar - Inscritos <a class="btn btn-xs btn-primary pull-right" href="{{ route('jovens.create') }}"><i class="glyphicon glyphicon-plus"></i> Inscrever participante</a></div>
        @if(Session::has('mensagem_sucesso'))
        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
         @endif 
          <div class="panel-body">
                @if($list->count())
            <table class="table table-condensed table-striped">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Telefone</th>
                <th>Igreja</th>
                <th>Cargo</th>
                <th class="text-right">Opções</th>
              </tr>
            </thead>
            <tbody>
              @foreach($list as $item)
              <tr>              
                <td>{{ $item->nome }}</td>
                <td>{{ $item->idade }}</td>
                <td>{{ $item->telefone }}</td>  
                @if($item->descricao != null )             
                <td>{{ $item->descricao }}</td>  
                @else    
                <td>{{ $item->igreja_diff }}</td>  
                @endif         
                <td> {{ $item->cargo}}
                <td class="text-right">                 
                  <a class="btn btn-xs btn-warning" href="{{ route('jovens.edit', $item->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                  <form action="{{ route('jovens.destroy', $item->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Deletar?')) { return true } else {return false }">
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