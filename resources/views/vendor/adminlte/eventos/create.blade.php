@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Igrejas
@endsection

@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">Criar novo Evento</div>
        <div class="panel-body">
          <form method="POST" action="{{ route('eventos.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descricao" value="{{ old('descricao') }}">
            </div>
            <div class="form-group">
                <label for="dt_inicio">Data Inicio</label>   
                <input type="date" name="dt_inicio" class="form-control" placeholder="MM/DD/YYY" id="dt_inicio" value="{{ old('dt_inicio') }}" required>
            </div>   
            <div class="form-group">
                <label for="dt_fim">Data Fim</label>
                <input type="date" name="dt_fim" class="form-control" placeholder="MM/DD/YYY" id="dt_fim" value="{{ old('dt_fim') }}">
            </div>         
            <button type="submit" class="btn btn-default">Criar</button>
            <a href="{{ route('eventos.index') }}" class="btn btn-danger pull-right">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
