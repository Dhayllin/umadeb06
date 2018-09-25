@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="small-box bg-green">
				<div class="inner">
				<h3>{{$total_inscritos}}<sup style="font-size: 20px"></sup></h3>
	
					<p>Tatal de inscritos hoje I Capacitar</p>
				</div>
				<div class="icon">
						<i class="fa fa-user-plus"></i>
					</div>
				<a href="#" class="small-box-footer"></a>
			</div>
			<div class="small-box bg-yellow">
				<div class="inner">
				  <h3>{{$total_inscritos_hoje}}</h3>
	
				  <p>Total de inscritos I Capacitar</p>
				</div>
				<div class="icon">
				  <i class="fa  fa-users"></i>
				</div>
				<a href="#" class="small-box-footer"></a>
			  </div>
		
		<div class="small-box bg-red">
            <div class="inner">
              <h3>0</h3>
              <p>Total de desistências I Capacitar</p>
            </div>
            <div class="icon">
              <i class="fa  fa-user-times"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
		  </div>
		</div>
	</div>
@endsection
