@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
 <strong> I Capacitar - Quantidade Parcial das inscrições </strong>
<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="small-box bg-green">
				<div class="inner">
				<h3>{{$total_inscritos_lideres}}<sup style="font-size: 20px"></sup></h3>	
					<p><strong>Total de inscritos</strong></p>
				</div>
				<div class="icon">
						<i class="fa fa-user-plus"></i>
				</div>
				<a href="{{ url('jovens/lideres_index',$user->igreja_id) }}" class="small-box-footer">
					Mais informações
					<i class="fa fa-arrow-circle-right">
					</i>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
