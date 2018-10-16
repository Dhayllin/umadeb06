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
                <th>Igreja</th>              
                <th class="text-right">Check-in</th>
              </tr>
            </thead>
            <tbody>
              @foreach($list as $item)
              <tr>              
                <td>{{ $item->nome }}</td> 
                @if($item->descricao != null )             
                <td>{{ $item->descricao }}</td>  
                @else    
                <td>{{ $item->igreja_diff }}</td>  
                @endif 
                <td class="text-right">                 
                  <a class="btn btn-xs btn-primary" href="{{ route('jovens.edit', $item->id) }}">  <i class='fa fa-check-square'></i> </a>                                  
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