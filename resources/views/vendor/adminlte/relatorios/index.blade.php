@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Ausentes',      2],   
      ['Presentes',    7]
    ]);

    var options = {
      title: 'Total 140 inscritos',
      is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
  }
</script>


@section('main-content')
 <strong> I Capacitar - Relatórios </strong>
<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Check-in</h3>    
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                </div>
                <!-- /.box-body -->
              </div>
		</div>
	</div>
</div>
@endsection
