@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Inscritos I Capacitar
@endsection

@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">I Capacitar - Check-in </div>
        @if(Session::has('mensagem_sucesso'))
        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
         @endif 
          <div class="panel-body">
                @if($list->count())
            <table class="table table-condensed table-striped">
            <thead>
              <tr>
                <th class="right aligned">Nome</th>              
                <th class="right aligned">Igreja</th>              
                <th  class="right aligned">Check-in</th>
              </tr>
            </thead>
            <tbody>
              @foreach($list as $item)
              <tr>              
                <td  class="right aligned">{{ $item->nome }}</td> 
                
                @if($item->descricao != null )             
                <td class="right aligned">{{ $item->descricao }}</td>  
                @else    
                <td  class="right aligned">{{ $item->igreja_diff }}</td>  
                @endif                
                <td  class="right aligned"><a href="{{$item->id}}/checkin" data-toggle="tooltip" title="" data-original-title="Check-in?" style="color: grey"><i class="fa fa-check-square" aria-hidden="true"></i></a></td> 
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