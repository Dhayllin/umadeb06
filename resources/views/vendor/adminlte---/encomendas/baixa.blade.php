
@extends('adminlte::layouts.app')
@section('htmlheader_title')
	Encomenda
@endsection
@section('contentheader_title')
    Encomenda
@endsection
@section('main-content')
<div class="container">
    <section id="section-principal" class="content">
        <div class="row">
            <div class="col-md-9 col-md-offset-0">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title text-center">Dados da Encomenda</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                            @foreach($encomendas as $encomenda)
                        <div class="col-md-9">
                            <h4><strong>Descrição:      </strong > {{$encomenda->descricao}}</h4>
                            <h4><strong>Nº nota Fiscal: </strong>{{$encomenda->nota_fiscal}}</h4>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="col-xs-9">	
                            <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-info"><i class="fa fa-arrow-left"></i> Voltar</button>                   
                 div       </div>
                    </div>            
                </div>
            </>
			<div class="col-md-9 col-md-offset-0">
				<div class="box box-success">
					<div class="box-header">
						<div class="box-title">                             	                   
									Fazer baixa		           	
						</div>              
					</div>
					<div class="panel-body"> 
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
                    @endif     
                    {{ Form::model($encomenda,['method'=>'PATCH','url'=>'encomendas/'.$encomenda->id]) }}

                    <div class="col-md-6" >
                    {!! Form::label('data_entrega','Data da Entrega:') !!} 
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>              
                            {!! Form::input('date','data_entrega',null,['class'=>'form-control','autofocos','required' ]) !!}                   
                        </div>
                    </div>
                    <br>
                    {!! Form::label('cliente_recebedor','Recebido por:') !!}
                    {!! Form::input('text','cliente_recebedor',null,['class'=>'form-control','autofocos']) !!}   
                     <br> 
                     <div class="col-md-6">
                        {!! Form::label('status_id','Status:') !!} 
                           <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecione" style="width: 100%;"name="status_id" id="nome" >
                                  <option value="" >Selecione</option>         
                              @foreach($status as $status_id)  
                                  <option value="{{$status_id->id}}" 
                                                  @if($encomenda->status_id == $status_id->id && Request::is('*/editar'))
                                                      {{'selected'}}
                                                  @endif>                                                                            
                                                  {{$status_id->descricao_status}}
                                  </option>
                              @endforeach
                           </select>                 
                        </div>
                    {!! Form::hidden('user_id_cadastro_baixa', Auth::id()) !!} 
                    {!! Form::hidden('btn_baixa', '1') !!} 
                    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                                    
                    {!! Form::close() !!}
                </div>
				</div>
			</div>
  </section>
</div>         
@endsection














