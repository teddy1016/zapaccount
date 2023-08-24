<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Login to your ZAP Account - One account to manage all your ZAP"</title>
    
    <!-- Loading Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/css/style-magnific-popup.css')}}" rel="stylesheet">
    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700&display=swap" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top"
        style="box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)";>
        <div class="container">
          <!--begin logo -->
          <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('assets/images/logo.png')}}" alt="ZAP Account"></a>
          <!--end logo -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
            <li><a href="#home">Home</a></li>
                <li><a href="#portfolio">Our Products</a></li>
                <li><a href="#team">ZAP Ads</a></li>
                <li><a href="#team">ZAP Market</a></li>
                <li><a href="#features">ZAP Places</a></li>

                @guest
                    <li class="discover-link">
                        <a class="discover-btn {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="discover-link">
                        <a class="discover-btn {{ (request()->is('register')) ? 'active' : '' }}" href="{{ url('/') }}">Register</a>
                    </li>
                @else    
                    <li class="discover-link">
                        @if (Auth::user()->role == 1)
                        <a class="discover-btn" href="{{ route('admin') }}">
                            Admin 
                        </a>
                        @endif
                    </li>
        
                    <li class="discover-link dropdown">
                        <a class="discover-btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->email }}
                        </a>

                        <ul class="dropdown-menu" style="left: 40%; top: 120%; border-radius: 25px; background-color: grey;">
                            <li class="discover-link dropdown" style="text-align: center;">
                                <a class=" discover-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                style="color: white;"
                                >Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>    

    <div class="container">
        @yield('content')
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>