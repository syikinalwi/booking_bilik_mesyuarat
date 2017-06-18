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
    <link href='fullcalendar.css' rel='stylesheet' />
    <link href='scheduler.css' rel='stylesheet' />
    <script src='moment.js'></script>

	{{ Html::style('fullcalendar-3.4.0/fullcalendar.css') }}

	{{ Html::script('fullcalendar-3.4.0/lib/jquery.min.js') }}

	{{ Html::script('fullcalendar-3.4.0/lib/moment.min.js') }}

	{{ Html::script('fullcalendar-3.4.0/fullcalendar.js') }}

    <style>
        body {
            font-family: 'Arial';
             
            background-color: #f5f5dc; 
        }



        /*.fullcalendar{

             background-color: pink; 
        }
*/
        .fa-btn {
            margin-right: 6px;
        }
    </style>
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
                    </a></nav>
                    </nav></nav></div></div></nav>
            </div>
      

        
    </header>

         <nav class="navbar navbar-default navbar-static-top">

        <div class="container">
            
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                    <li><a href="{{ url('/calendar') }}">Halaman Utama</a></li>
                    <li><a href="{{ url('/bookingroom/create') }}">Tempah Bilik</a></li>
                    <li><a href="{{ url('/try/try') }}">try</a></li>
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

    <script>
 



    $(document).ready(function() {
    // month calendar
    $('#calendar').fullCalendar({
         // theme: true,
         // editable: true,
         // eventLimit: true,

         // // displayEventTime : false,
         // header{
         //     left:'prev, next today',
         //     center:'title',
         //     right:'month, agendaWeek, agendaDay'
         // },
         // events: "{{ url('/bookingroom/create') }}",
                })

    // week calendar
    // $('#calendar').fullCalendar({
    // defaultDate: '2014-11-10',
    // defaultView: 'agendaWeek',
    // events: [
    //     {
    //         start: '2014-11-10T10:00:00',
    //         end: '2014-11-10T16:00:00',
    //         rendering: 'background'
    //     }
    // ]
    // //  color: 'yellow',   // an option!
    // // textColor: 'black' // an option!
    //     });
    // // day calendar
    // $('#calendar').fullCalendar({
    // defaultView: 'agendaDay',
    // events: [
    //     // events go here
    // ],
    // resources: [
    //     { id: 'a', title: 'Room A' },
    //     { id: 'b', title: 'Room B' },
    //     { id: 'c', title: 'Room C' },
    //     { id: 'd', title: 'Room D' }
    // ]
    //     });

    });
    
    </script>  
    <!-- <div class="container">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div id='calendar'></div>
        </div></div></div>
    -->
   <div class="container">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="panel panel-success">
            
                <div class="fc-toolbar fc-header-toolbar">
                    <div class="fc-left"
                    <div class="fc-button-group">
                    <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
                        <span class="fc-icon fc-icon-left-single-arrow"></span>
                    </button>
                    <button type="button" class="fc-next-button fc-state-default fc-corner-right">
                        <span class="fc-icon fc-icon-right-single-arrow"></span>
                    </button>
                    </div>
                    <div class="fc-right">
                        <div class="fc-button-group">

                            <button type="button" class="fc-today-button fc-button fc-state-default">today</button>

                            <button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button>

                            <button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button>

                            <button type="button" class="fc-agendaday-button fc-button fc-state-default fc-corner-right">day</button>
                        </div>

                        <div class="fc-center">
                            <h2></h2>
                        </div>

                        <div class="fc-clear"></div>
                    </div>
                    </div>
                    <div id='calendar' class="fc fc-unthemed fc-ltr">
                </div>

            </div>
        </div></div>
    </div>
    
    <script src='jquery.js'></script>
    <script src='fullcalendar.js'></script>
    <script src='scheduler.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type='text/javascript'></script>
    
</body>
</html>


