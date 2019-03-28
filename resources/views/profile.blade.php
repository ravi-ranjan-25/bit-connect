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
</head>
<body style="background:black;">
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
<li class="nav-item">
    <a href="{{route('forum')}}" class="nav-link">Home</a>
</li>

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



<div class="col-sm-3 justify-content-center">
        <div class="card">
        <div class="card-header text-center ">
        Profile
        </div>
        <div class="card-body">
        <img src = "{{$user->avatar}}" class = "img-fluid rounded-circle text-center" width = "200px">
        <br><b>{{$user->name}}</b>
        @if($user->admin == 1)
            <div style ="color:red">Admin</div>
        @endif

{{$user->stream}} &nbsp; {{$user->year}}nd Year
        </div>

        
        <div class="card-footer">
        @if($user->id == Auth::id())
            <a href="{{route('settings')}}" class="btn btn-info">
                Settings
            </a>

        <form action="{{route('picture')}}" class="" enctype = "multipart/form-data" method = "post">
        <br>{{csrf_field()}}
        <div class="form-group">
        <label for="pic" class="">Profile Picture</label>
         <input type="file" name = "link" class="form-control" placeholder = "Upload Profile Picture" value ="Change Profile picture">
        </div>
        <div class="form-group">
        <input type="submit" class="form-control" value = "Change Profile Picture">
        </div>
        </form>
@endif
        </div>
        </div>
        </div>

<div class="col-sm-6">
<div class="row justify-content-center">
        <div class="col-md-12">
        <div class = "text-center"><h3>Discussions</h3></div><br>        @foreach($user->discuss as $discussion)
        <div class="card">
            
            <div class="card-header" style="background:#ff8000;">
            
            <img  class = "img-circle"src = "{{$user->avatar}}" width = "70px" height = "70px">
            &nbsp; {{$user->name}} &nbsp; {{$discussion->created_at->diffForHumans()}}
            <a href="{{route('discussion',['slug' => $discussion->slug])}}" class="btn btn-xs btn-primary pull-right" style = "texr-align:center;background-color:black; color:white;border-radius:50px;width:100px;margin:10px;">View</a>
            </div>
               <div class = "card-body">
               <h3>{{$discussion->title}}  </h3>
              <p> {{$discussion->content}}</p>
               </div>
               <div class="card-footer">
               {{$discussion->replies->count()}} Replies
               </div>
        </div>
    <br><br>
            @endforeach
              </div>

    </div>
</div>
<div class="col-sm-3">
<div class="card justify-content-center">
    <div class="card">
        <div class="card-header">
            Ebooks
            <table class = "table-hover table">
<thead class = "panel-heading">
<th style = "color:black;"><th>
</thead>
<tbody class = "panel-body">
@foreach($channels as $channel)

<div class="card">
<tr>

<td style = "color:black;" class = "card-header" >{{$channel->title}}
<div class="card-body">
@foreach($channel->ebook as $ebook)
{{$ebook->name}} &nbsp; &nbsp; <a href="{{asset($ebook->link)}}" class="btn btn-sm btn-ptimary">View</a><br>
@endforeach</div>
@endforeach</td>
</tr>
</div>

</tbody>
</table>

        </div>
        <div class="card-body">
            
        </div>
    </div>
</div>
</div>



    </div>
</body>
</html>
