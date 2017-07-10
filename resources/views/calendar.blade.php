<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TempahBilikMesyuarat|...</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
   
	{{ Html::style('/fullcalendar-3.4.0/fullcalendar.css') }}

	{{ Html::script('/fullcalendar-3.4.0/lib/jquery.min.js') }}

	{{ Html::script('/fullcalendar-3.4.0/lib/moment.min.js') }}

	{{ Html::script('/fullcalendar-3.4.0/fullcalendar.js') }}

    <style>
        body {
            font-family: 'Arial';
             
            background-color: #f5f5dc; 
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>


   <script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
              defaultView: 'agendaWeek',
            editable: true,
            selectable: true,
            allDaySlot: false,
           
             header:{
                left: 'prev,next today',
                center: 'title',
                right: 'agendaWeek,agendaDay'
            },
          
            events:"{{ url('/bookingroom/events') }}",

             // eventClick:  function(event, jsEvent, view) {
             //    endtime = $.fullCalendar.moment(event.end).format('h:mm');
             //    starttime = $.fullCalendar.moment(event.start).format('dddd, MMMM Do YYYY, h:mm');
             //    var mywhen = starttime + ' - ' + endtime;
             //    $('#modalTitle').html(event.title);
             //    $('#modalWhen').text(mywhen);
             //    $('#eventID').val(event.id);
             //    $('#calendarModal').modal();
            // },
        })
    });
</script>

</head>

<body id="app-layout">
    <header role="banner" id="zerro-header">
        <nav class="navbar navbar-warning navbar-static-top">
        <div class="container" >
           <div class="navbar-header">
            <nav class="navbar navbar-warning navbar-static-top">
            <nav class="navbar navbar-warning navbar-static-top">
            <nav class="navbar navbar-warning navbar-static-top">
                   <!-- Branding Image -->
                        <a class="navbar-brand" href="#"><img width="300" src="/image/bannerJKR.png" alt>    
                        </a>
            </nav>
            </nav>
            </nav>
           </div></div></nav>
            </div>
      <nav class="navbar navbar-default navbar-static-top">

        <div class="container">
            
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                    <li><a href="{{ url('/calendar') }}">Halaman Utama</a></li>
                    <li><a href="{{ url('/bookingroom/create') }}">Tempah Bilik</a></li>
                    <li><a href="{{ url('/admin/form') }}">adminform</a></li>
                  
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Masuk</a></li>
                        <li><a href="{{ url('/register') }}">Daftar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                </div>
            </div>
        </nav>
        
    </header>

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

 
</body>
</html>


