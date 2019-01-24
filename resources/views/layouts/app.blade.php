<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
</head>
<body>
    
   <a href="#main" class="sr-only sr-only-focusable"> skip</a>
   <nav class="navbar navbar-expand-md navbar-light bg-light">
     <div class="container"> 
       <a href="{{ url('home') }}" class="navbar-brand"> Blog</a>
       <button type="button" class="navbar-toggler" data-toggler="collapse" data-toggler="navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigavtion">
      <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            <li> <a class="navbar-brand" href="{{url('/home')}}">Home</a></li>
                <li> <a class="navbar-brand" href="{{url('/post')}}">Add Post</a></li>

            </ul>

            <!-- Right Side Of Navbar -->
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

               
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li> <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                            <li> <a class="dropdown-item" href="{{ url('/category') }}">Category</a></li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
        </div>
       </nav>
            @yield('content')
        
    
</body>
</html>
