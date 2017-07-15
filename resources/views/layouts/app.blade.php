<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TempahBilikMesyuarat|...</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{ Html::style('/fullcalendar-3.4.0/fullcalendar.css') }}

    
     

    <style>
        html, body {
            font-family: 'Arial';
             color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0 auto;
                background-color: #f5f5dc; 
        }
    
        .fa-btn {
            margin-right: 6px;
        }
         .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
              /*  text-transform: uppercase;*/
            }
            .m-b-md {
                margin-bottom: 30px;
            }
    </style>

   

</head>
<body id="app-layout">
    <header role="banner" id="zerro-header">
         <nav class="navbar navbar-warning-static-top">
        <div class="container" >
           <div class="navbar-header">
         <nav class="navbar navbar-warning-static-top">
         <nav class="navbar navbar-warning-static-top">
         <nav class="navbar navbar-warning-static-top">
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

                <!-- create condition for admin or user login -->
                    @if (Auth::User())
                    <li><a href="{{ url('/calendar') }}">Halaman Utama</a></li>
                    <li><a href="{{ url('/bookingroom/create') }}">Tempah Bilik</a></li>
                    <li><a href="{{ url('/admin/form') }}">Borang Tempahan Admin</a></li>
                    @else
                    <li><a href="#">Halaman Utama</a></li>
                    <li><a href="#">Tempah Bilik</a></li>
                    @endif
                   
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
    @yield('content')

    
</body>
</html>