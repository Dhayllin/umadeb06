@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Igrejas
@endsection

@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-11">
      <div class="panel panel-default">
      <div class="panel-heading">Líderes<a class="btn btn-xs btn-primary pull-right" href="{{ url('users/create')}}"><i class="glyphicon glyphicon-plus"></i>Adicionar</a></div>
            <div class="panel-body">
                @if($list->count())
            <table class="table table-condensed table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Função</th>   
                <th>telefone</th>  
                <th>Igreja</th>
                <th>Email</th>     
                <th class="text-right">Opções</th>
              </tr>
            </thead>
            <tbody>
              @foreach($list as $item)
              <tr>              
                <td></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->descricao_categoria }}</td>
                <td>{{ $item->telefone }}
                <td>{{ $item->descricao}}</td>      
                <td>{{ $item->email }}</td>                    
                <td class="text-right">                 
                  <a class="btn btn-xs btn-warning" href="#"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                  <form action="#" style="display: inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Cancelar</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="text-center">
               {{-- $list->links() --}}
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