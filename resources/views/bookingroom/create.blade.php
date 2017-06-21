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


    {{ Html::style('fullcalendar-3.4.0/fullcalendar.css') }}

    {{ Html::script('fullcalendar-3.4.0/lib/jquery.min.js') }}

    {{ Html::script('fullcalendar-3.4.0/lib/moment.min.js') }}

    {{ Html::script('fullcalendar-3.4.0/fullcalendar.js') }}

    <style>
        body {
            font-family: 'Arial';
             
            background-color: #f5f5dc; 
        }



        .fullcalendar{

             background-color: pink; 
        }

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
                    </nav></nav>
            </div>
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
                    <li><a href="{{ url('/admin/form') }}">adminform</a></li>
                    <li><a href="{{ url('/admin/add') }}">adminadd</a></li>
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


<div class="container-fluid">
<div class="container">
    <div class="row">
        <div class="col-xs-7">
            <div class="panel panel-success">
            <div id='calendar'></div>
        </div></div>

        <div class="col-xs-5">
            <div class="panel panel-success">

            
                <div class="panel-heading">
        <div class="flex-center position-ref">Borang Tempahan Bilik</div></div>

                <div class="panel-body">
                     
                <!-- tambah form kat sini -->

                {!! Form::open(['route' => 'bookingroom.store', 'bookingroom'=>true]) !!}

                <div>
                    {!! Form::label('department_name', 'Bahagian/Unit:'); !!}
                    {!! Form::select('department_name', $departments , null, ['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>


                 <div>
                    {!! Form::label('room_name', 'Bilik Mesyuarat:'); !!}
                    {!! Form::select('room_name', $rooms , null, ['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>


                <!-- <div class="form-group">
                    {!! Form::label('room', 'Bilik Mesyuarat:'); !!}
                    <ul>{!! Form::radio('room', 'bilikgerakan', false); !!} Bilik Gerakan</ul>
                    <ul>{!! Form::radio('room', 'bilikmesyuaratA', false); !!} Bilik Mesyuarat A</ul>
                    <ul> {!! Form::radio('room', 'bilikmesyuaratC', false); !!} Bilik Mesyuarat C</ul>
                </div> -->


                <!-- select date -->
                <div class="form-group">
                    {!! Form::label('room', 'tarikh :'); !!}
                     {!! Form::date('room', '',['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('room', 'color :'); !!}
                     {!! Form::color('room'); !!}
                </div>

                <!-- 
                <p>Date: <input type="text" id="datepicker"><span class="glyphicon glyphicon-calendar"></span></p> -->
                 
                <div class="form-group">

                    {!! Form::label('stuff_list', 'Peralatan :'); !!}
                    {!! Form::checkbox('stuff_list', 'laptop', false); !!}Laptop
                    {!! Form::checkbox('stuff_list', 'LCD', false); !!}LCD
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



<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({

        })
    });
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</body>
</html>


