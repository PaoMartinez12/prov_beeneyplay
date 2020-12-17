<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    

    <!-- Style para formulario de Cliente Beenetplay --> 
    <style>
        .register{
            background: -webkit-linear-gradient(left, #1a1c20, #534e52, #1a1c20);
            margin-top: 3%;
            padding: 3%;
        }
        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }
        .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }
        .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }
        .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }
        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #db6400;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }
        .register .nav-tabs .nav-link{
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .register .nav-tabs .nav-link.active{
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
    
    

</head>
<body>
    <div id="app">
        @auth
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            {{-- config('app.name', 'Laravel') --}}
                            <strong> Aprovisionamiento BeenetPlay </strong>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            {{-- @auth --}}
                                @if(Auth::user()->hasRole('admin'))
                                    <li><a href="{{ route('home') }}"><strong>Usuarios</strong></a></li>
                                @endif
                                    <li><a href="{{ route('provisionar') }}"><strong>Agregar Cliente</strong></a></li>
                                
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                            <span class="label label-primary"><strong>{{ Auth::user()->name }}</strong></span>
                                            {{-- {{ Auth::user()->name }} <span class="caret"></span> --}}
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    Cerrar sesion
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                            {{-- @endauth --}}
                        </ul>
                    </div>
                </div>

            </nav>
        @endauth
        
        @yield('content')
        @include('sweetalert::alert')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    {{--
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    --}}
    

</body>
</html>
