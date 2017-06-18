<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TempahBilikMesyuarat|...</title>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Arial';
             
            background-color: #f5f5dc; 
        }



        .fullcalendar{

             background-color: white; 
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

     <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "/image/calendar1.gif",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  } );
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
                    </a></nav>
                    </nav></nav>
            </div>
        </div>
</nav>
        
    </header>

         <nav class="navbar navbar-default navbar-static-top">

        <div class="container">
            
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                    <li><a href="{{ url('/calendar') }}">Halaman Utama</a></li>
                    <li><a href="{{ url('/bookingroom/create') }}">Tempah Bilik</a></li>
                    <li><a href="{{ url('/try/try') }}">try</a></li>
                    <li><a href="{{ url('/try/try2') }}">try2</a></li>
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






<!-- <ul id="menu">
  <li>
    <div><span class="ui-icon ui-icon-disk"></span>Save</div>
  </li>
  <li>
    <div><span class="ui-icon ui-icon-zoomin"></span>Zoom In</div>
  </li>
  <li>
    <div><span class="ui-icon ui-icon-zoomout"></span>Zoom Out</div>
  </li>
  <li class="ui-state-disabled">
    <div><span class="ui-icon ui-icon-print"></span>Print...</div>
  </li>
  <li>
    <div>Playback</div>
    <ul>
      <li>
        <div><span class="ui-icon ui-icon-seek-start"></span>Prev</div>
      </li>
      <li>
        <div><span class="ui-icon ui-icon-stop"></span>Stop</div>
      </li>
      <li>
        <div><span class="ui-icon ui-icon-play"></span>Play</div>
      </li>
      <li>
        <div><span class="ui-icon ui-icon-seek-end"></span>Next</div>
      </li>
    </ul>
  </li>
  <li>
    <div>Learn more about this menu</div>
  </li>
</ul>
 
  -->
        <div class="col-md-7 col-md-offset-4">
          <p>Date: <input type="text" id="datepicker"><span class="datepicker"></span></p>
 
        </div>




</body>
</html>

