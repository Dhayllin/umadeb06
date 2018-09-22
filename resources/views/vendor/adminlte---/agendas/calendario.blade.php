@extends('adminlte::layouts.app')

@section('css-customizados')
<link href="{{ url ('/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" />
<link href="{{ url ('/plugins/fullcalendar/fullcalendar.print.min.css') }}" rel="stylesheet" media="print" />
@endsection

@section('scripts-adicionais')
<script src="{{ url ('/plugins/fullcalendar/lib/moment.min.js') }}"></script>
<script src="{{ url ('/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script>
 <script>
  $(function(){
    $('#calendar').fullCalendar({
      defaultView: 'agendaFourDay',
      groupByResource: true,
      header: {
        left: 'prev,next',
        center: 'title',
        right: 'agendaDay,agendaFourDay'
      },
    });
  });
</script>
</script>
@endsection

@section('htmlheader_title')
   Agenda
@endsection
@section('contentheader_title')
   Agenda
@endsection
@section('main-content')
<div class="row">
    <div class="col-md-7">      
      <div class="box box-success">
        <!-- THE CALENDAR -->
        <div id="calendar"></div>
      </div>
        <!-- /.box-body -->
    </div>
    <!-- /. box -->       
</div>
@endsection