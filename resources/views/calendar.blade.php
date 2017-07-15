@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
            <div id='calendar'></div>
        </div></div>


    </div>
</div>
  </div>



{{ Html::script('fullcalendar-3.4.0/lib/jquery.min.js') }}

{{ Html::script('fullcalendar-3.4.0/lib/moment.min.js') }}

{{ Html::script('fullcalendar-3.4.0/fullcalendar.js') }}

<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            defaultView: 'agendaWeek',
            editable: false,
            selectable: false,
            // start:  '2010-01-01T14:30:00',
            allDaySlot: false,
           
             header:{
                left: 'prev,next today',
                center: 'title',
                right: 'agendaWeek,agendaDay'
            },

            events:"{{ url('/bookingrooms/getallevents') }}",
            eventDrop: function(event, delta, revertFunc) {
                var ajax_url = '/bookingroom/updateevents/' + event.id;
                alert(event.title + " was dropped on " + event.start.format() + " " + event.id);
                var event_id=event.id;
                var event_date=event.start.format();
                var token='{{csrf_token()}}';
                var data = 'date='+ event_date+'&_token='+token;
                
                console.log(token);
                console.log(token);

                if (!confirm("Are you sure about this change?")) {
                    revertFunc();
                }
                else {
                   $.ajax({
                     type: "POST",
                     url: ajax_url,
                     data: data
                     // success: success,
                     // dataType: dataType
                   });
                }
            }
           // timeFormat: 'H(:mm)' // uppercase H for 24-hour clock
        
        })
    });
</script>
@endsection