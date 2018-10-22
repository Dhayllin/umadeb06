
@extends('adminlte::layouts.app')

@section('css-customizados')
<link href="{{ url ('/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" />
<link href="{{ url ('/plugins/fullcalendar/fullcalendar.print.min.css') }}" rel="stylesheet" media="print" />
@endsection

@section('scripts-adicionais')
 
<script src="{{ url ('/plugins/fullcalendar/lib/moment.min.js') }}"></script>
<script src="{{ url ('/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ url ('/plugins/fullcalendar/locale/pt-br.js') }}"></script>
<script src="{{ url ('/plugins/fullcalendar/gcal.min.js') }}"></script>
<script>
  $(function () {
  
    $('#calendar').fullCalendar({
      
      eventLimit: true, 
      navLinks: true,   
      googleCalendarApiKey: 'AIzaSyCK5rJB2avWdmpprHCs0PFA2z-TvD07Yao',
	  
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek'
      },
	  views: {
			month: {
			  eventLimit: 5,
		    }
			
	  },	  
      googleCalendarApiKey: 'AIzaSyCK5rJB2avWdmpprHCs0PFA2z-TvD07Yao',
     
      eventSources:   [
        '{{ url('/') }}/agendas/api',       
        'pt_BR.brazilian#holiday@group.v.calendar.google.com'
      ],
      
      eventRender: function(eventSources, element, view) {

        if ((eventSources.source.googleCalendarId !== undefined) ? true : false) {
          var dateString = eventSources.start.format("YYYY-MM-DD");
          $(view.el[0]).find('.fc-day[data-date=' + dateString + ']').css('background-color', '#f9c070');
        }

       
        if ((eventSources.icon !== undefined) ? true : false) {          
          element.find(".fc-title").prepend("<i class='fa fa-"+eventSources.icon+"'></i>  ");
        }
     },
	   eventClick: function(event) {
       console.log(event);
        if ((event.source.googleCalendarId !== undefined) ? true : false) {
           window.open(event.url);
           return false;
        }else if (event.url) {
           var paramUri = "{{ url('/') }}/funcionarios/"+event.url+"/visualizar";
           window.open(paramUri);
          return false;
         }
     }    
    })
  })
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
        <div class="col-md-2">
          <div class="box box-solid">
            <a href="{{ route('eventos.create')}}" class="btn btn-primary btn-block margin-bottom" type="button"><i class="fa fa-plus pull-left" aria-hidden="true"></i>&nbsp; Novo Evento</a>
            <!-- /.box-body -->
          </div>
        </div>  
        <!-- /.col -->
        <div class="col-md-8">
         
            <div class="box box-success">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->       
</div>
@endsection