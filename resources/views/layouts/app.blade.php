<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta property="og:title" content="Ravi Ranjan">
        <meta property="og:description" content="Ravi Ranjan's Portfolio Website">
        <meta name="author" content="Ravi Ranjan">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
       body{ background:black;
       }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel"  style="background:#ff8000;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar --
                    
                    -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item d-flex justify-content-center">
                                <form action="{{route('user.search')}}" class="" method = "post">
                              {{ csrf_field()}}
                                <div class="form-group ">
                                    <input type="text" class="form-control" align="center"  name = "name" placeholder = "Connect to your classmates" style="width:400px;">
                                </div>
                        
            
                                </form>
                                                            </li>@if(Auth::user()->admin == 1)
                                                            <li class="nav-item dropdown">
                                <a id="" class="nav-link" href="{{route('ebooks')}}">
                                    Manage Ebooks                                 </a></li>@endif


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
<br><br>
<div class="row" style = "">   
<div class="col-sm-3">

<a href="{{ route('discuss.create') }}" class="form-control btn " style="background-color:#ff8000; color:white;margin:10px;">Start a Discussion</a> <br><br>
 <a href="{{ route('forum') }}" class="form-control btn btn-success" style="background-color:#ff8000; color:white;margin:10px;" >Forums</a>

<div class = "panel">

<table class = "table-hover table">
<thead class = "panel-heading">
<th style = "color:white;">Subject</th>
</thead>
<tbody class = "panel-body">
@foreach($channels as $channel)
<tr>
<td style = "color:white;" >{{$channel->title}}</td>
</tr>
@endforeach

</tbody>
</table>

</div>

</div>
<div class="col-sm-6 " style="background:black;"  >
        @yield('content')
        </div>
        <div class="col-sm-3 justify-content-center">
        @if(Auth::check())
        <div class="card justify-content-center">
        <div class="card-header text-center "> 
        Profile
        </div>
        <div class="card-body justify-content-center">
        <img src = "{{Auth::user()->avatar}}" class = "img-fluid rounded-circle text-center" width = "200px">
        <br><b>{{Auth::user()->name}}</b>
        @if(Auth::user()->admin == 1)
            <div style ="color:red">Admin</div>
        @endif


        </div>
        <div class="card-footer text-center bg-success" >
        <a href="{{route('userprofile',['username'=> Auth::user()->username])}}" class="" style ="color:white">View Profile</a>
        </div>
        @endif
        </div>
        </div>
        </div>

    </div>
</body>
</html>
