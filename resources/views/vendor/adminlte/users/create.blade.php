@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Líderes
@endsection

@section('main-content')
<div class="container">
	<div class="row">
	  <div class="col-md-10">
		<div class="panel panel-default">
		  <div class="panel-heading">Criar novo Líder</div>
		  <div class="panel-body">
			<form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
			  {{ csrf_field() }}
			  <div class="form-group">
				<label for="name">Nome</label>
				<input type="text" name="name" class="form-control" id="name" placeholder="Nome" value="{{ old('name') }}"required>
			  </div>
			  <div class="form-group">
				  <label for="telefone">Whatsapp/Celular</label>
				  <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone"  value="{{ old('telefone') }}" required>
			  </div>
			  <div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" id="email" placeholder="Email"  value="{{ old('email') }}"required>
			  </div>
			  <div class="form-group">
				<label for="categoria_lider_id"><strong>Função </strong></label>
				<select name ="categoria_lider_id"class="form-control"required>
					<option value="">Selecione </option>
					@foreach ($categoria_lideres as $categoria_lider_id)
					<option value="{{$categoria_lider_id->id}}">{{$categoria_lider_id->descricao_categoria}}</option>
					@endforeach                           
				</select> 
			  </div>
			  <div class="form-group">
				<label for="igreja_id"><strong>Igreja </strong></label>
				<select name ="igreja_id"class="form-control" required>
					<option value="">Selecione </option>
					@foreach ($igrejas as $igreja)
					<option value="{{$igreja->id}}">{{$igreja->descricao}}</option>
					@endforeach                           
				</select> 
				</div>  
				<label for="password"><strong> Senha </strong></label>
				<div class="form-group ">
						<input type="password" class="form-control" placeholder="Senha" name="password"/>					
				</div>                
			  <button type="submit" class="btn btn-default">Criar</button>
			  <a href="{{ route('users.index') }}" class="btn btn-danger pull-right">Cancelar</a>
			</form>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  @endsection