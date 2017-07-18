@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="container">
    <div class="row">

        <div class="col-xs-7">
            <div class="panel panel-success">
            <div id='calendar'></div>
            </div>
        </div>

        <div class="col-xs-5">
            <div class="panel panel-success">

            
                <div class="panel-heading">
                    <div class="flex-center position-ref">Borang Tempahan Bilik</div></div>
                        <!-- papar validation error -->
                        @if($errors->all())
                        <div class="alert alert-danger" role="alert">
                        <p>Validation error.Please fix this error below: </p>
                            <ul>
                            @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- papar succes noti -->
                       <!--  @if ( Session::has('success') )
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif -->
                <div class="panel-body">
                     
                <!-- tambah form kat sini -->

                {!! Form::open(['route' => 'bookingroom.store']) !!}

                <div class="form-group {{ $errors-> has('department_name') ? 'has-error' : false }}">
                    {!! Form::label('department_name', 'Bahagian/Unit:'); !!}
                    {!! Form::select('department_name', $departments , null, ['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>


                 <div class="form-group {{ $errors-> has('title') ? 'has-error' : false }}">
                    {!! Form::label('title', 'Bilik Mesyuarat:'); !!}
                    {!! Form::select('title', $rooms , null, ['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>

                <!-- select date -->
                <div class="form-group {{ $errors-> has('start') ? 'has-error' : false }}">
                    {!! Form::label('start', 'tarikh :'); !!}
                     {!! Form::date('start', '',['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>
                <!-- time field -->
                <div class="form-group {{ $errors-> has('time') ? 'has-error' : false }}">
                    {!! Form::label('time', 'Masa:'); !!}
                    {!! Form::time('time', $currtime, ['class'=>'form-control']); !!}
                </div>
                 
                <!-- <div class="form-group">
                    {!! Form::label('stuff_list', 'Peralatan :'); !!}
                    {!! Form::checkbox('stuff_list', 'laptop', false); !!}Laptop
                    {!! Form::checkbox('stuff_list', 'LCD', false); !!}LCD
                </div> -->

                <div class="form-group {{ $errors-> has('stuff_list') ? 'has-error' : false }}">
                    {!! Form::label('stuff_list', 'Peralatan :'); !!}
                    {!! Form::select('stuff_list', $stuffs , null, ['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>

                <div class="form-group {{ $errors-> has('meetingtitle_name') ? 'has-error' : false }}">
                    {!! Form::label('meetingtitle_name', 'Tajuk Mesyuarat/Taklimat :'); !!}
                    {!! Form::text('meetingtitle_name', '', ['class'=>'form-control']); !!}
                </div>

                 <div class="form-group {{ $errors-> has('drink_name') ? 'has-error' : false }}">
                    {!! Form::label('drink_name', 'Minuman :'); !!}
                    {!! Form::text('drink_name', '', ['class'=>'form-control']); !!}
                </div>

                <div class="form-group {{ $errors-> has('food_name') ? 'has-error' : false }}">
                    {!! Form::label('food_name', 'Makanan :'); !!}
                    {!! Form::textarea('food_name', '', ['class'=>'form-control']); !!}
                </div>             

                <!-- button submit -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Hantar Tempahan Bilik</button>
                    <a href="{{ route('bookingroom.index') }}" class="btn btn-danger">Batal</a>
                </div>

            {!! Form::close() !!}
            <!-- tutupform kat sini -->

                </div>
            </div>
        </div>
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
            editable: true,
            selectable: true,
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
            },
           // timeFormat: 'H(:mm)' // uppercase H for 24-hour clock
        
         eventClick: function(calEvent, jsEvent, view) {

            var url='/bookingroom/'+calEvent.id+'/edit';
            window.location = url;
            }
        })
    });
</script>
@endsection