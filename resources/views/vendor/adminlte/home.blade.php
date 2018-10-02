@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
 <strong> I Capacitar </strong>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-lg-6 col-xs-12">
				<div class="small-box bg-green">
					<div class="inner">
					<h3>{{$total_inscritos_hoje}}<sup style="font-size: 20px"></sup></h3>	
						<p><strong>Total de inscritos hoje</strong></p>
					</div>
					<div class="icon">
							<i class="fa fa-user-plus"></i>
						</div>
					<a href="#" class="small-box-footer"></a>
				</div>
			</div>
			<div class="col-lg-6 col-xs-12">
					<div class="small-box bg-yellow">
							<div class="inner">
								<h3>{{$total_inscritos}}</h3>				
								<p><strong>Total de inscritos </strong></p>
							</div>
							<div class="icon">
								<i class="fa  fa-users"></i>
							</div>
							<a href="#" class="small-box-footer"></a>
					</div>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-red">
							<div class="inner">
								<h3>{{$total_inscritos_por_igreja1}}</h3>				
								<p><strong> QD. 12 - Paranoá</strong></p>
							</div>
							<div class="icon">
								<i class="fa  fa-users"></i>
							</div>
							<a href="#" class="small-box-footer"></a>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red">
								<div class="inner">
									<h3>{{$total_inscritos_por_igreja2}}</h3>					
									<p><strong> QD. 15 - Paranoá </strong> </p>
								</div>
								<div class="icon">
									<i class="fa  fa-users"></i>
								</div>
								<a href="#" class="small-box-footer"></a>
						</div>
				</div>
				<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red">
								<div class="inner">
									<h3>{{$total_inscritos_por_igreja3}}</h3>					
									<p><strong> QD.23 - Paranoá </strong></p>
								</div>
								<div class="icon">
									<i class="fa  fa-users"></i>
								</div>
								<a href="#" class="small-box-footer"></a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
							<div class="small-box bg-red">
									<div class="inner">
										<h3>{{$total_inscritos_por_igreja4}}</h3>						
										<p><strong> QD. 01 - Itapoã I </strong></p>
									</div>
									<div class="icon">
										<i class="fa  fa-users"></i>
									</div>
									<a href="#" class="small-box-footer"></a>
							</div>
					</div>
			</div>
		<div class="row">
				<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red">
								<div class="inner">
									<h3>{{$total_inscritos_por_igreja5}}</h3>					
									<p><strong> QD. 09 - Del Lago </strong> </p>
								</div>
								<div class="icon">
									<i class="fa  fa-users"></i>
								</div>
								<a href="#" class="small-box-footer"></a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red">
							<div class="inner">
								<h3>{{$total_inscritos_por_igreja6}}</h3>
								<p><strong> QD. 52 - Del Lago </strong> </p>
							</div>
							<div class="icon">
								<i class="fa  fa-users"></i>
							</div>
							<a href="#" class="small-box-footer"></a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
							<div class="small-box bg-red">
									<div class="inner">
										<h3>{{$total_inscritos_por_igreja7}}</h3>
						
										<p><strong> QD. 334 - Del Lago </strong> </p>
									</div>
									<div class="icon">
										<i class="fa  fa-users"></i>
									</div>
									<a href="#" class="small-box-footer"></a>
							</div>
						</div>
						<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-red">
										<div class="inner">
											<h3>{{$total_inscritos_por_igreja8}}</h3>
											<p><strong> QD. 378 - Del Lago </strong> </p>
										</div>
										<div class="icon">
											<i class="fa  fa-users"></i>
										</div>
										<a href="#" class="small-box-footer"></a>
								</div>
						</div>
			</div>
			<div class="row">
					<div class="col-lg-12 col-xs-12">
					<div class="small-box bg-gray">
							<div class="inner">
								<h3>{{$total_inscritos_igreja_diff}}</h3>
								<p><strong> OUTRAS</strong> </p>
							</div>
							<div class="icon">
								<i class="fa  fa-users"></i>
							</div>
							<a href="#" class="small-box-footer"></a>
					</div>
					</div>
			</div>
		</div>
	</div>
@endsection
