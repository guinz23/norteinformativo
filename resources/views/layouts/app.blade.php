<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NorteInformativo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
 <div style="background-color:#e65100; height:90px;margin-top:">
 <nav  class="navbar navbar-expand-md navbar-light navbar-laravel" style=" background-color:black;margin-top:3%;  height:40px;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <h4 style="color:white"> {{ config('app.name', 'NorteInformativo') }}</h4>
                
                </a>
                <img class="icon-image" src="{{asset('img/logo.png')}}" alt="icon">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}"><h4 style="color:white">{{ __('Login') }}</h4></a></li>
                            <li><a class="nav-link" href="{{ route('register') }}"><h4 style="color:white">{{ __('Register') }}</h4></a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <h4  style="color:white;margin-top:10%;"> {{ Auth::user()->name }}</h4> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <h4>{{ __('Logout') }}</h4>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<style>
body{
    background-image: url(http://norteinformativo.com/wp-content/uploads/2017/08/beautiful-background-squared-wallpaper-blue.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;  
}
.icon-image{
    display:block;
     margin-top:-10px;
     width:50px;
     height:40px;
 }
</style>
</html>
