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
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
</head>
<body>
    <!--begin header -->
    <header class="header">
        <!--begin navbar-fixed-top -->
        <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top"
        style="box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)";>
            <!--begin container -->
            <div class="container">
                    <!--begin logo -->
                    <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('assets/images/logo.png')}}" alt="ZAP Account"></a>
                    <!--end logo -->
                    <!--begin navbar-toggler -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <!--end navbar-toggler -->

                    <!--begin navbar-collapse -->
                    <!-- <div class="navbar-collapse collapse" id="navbarCollapse" style=""> -->
                    <div class="navbar-collapse collapse" style="">
                        
                        <!--begin navbar-nav -->
                        <ul class="navbar-nav ml-auto" style="display: flex; justify-content: center; align-items: center;">
                            <li><a href="/#home">Home</a></li>
                            <li><a href="/#portfolio">Our Products</a></li>
                            <li><a href="/#team">ZAP Ads</a></li>
                            <li><a href="/#team">ZAP Market</a></li>
                            <li><a href="/#features">ZAP Places</a></li>
                            <!-- <li class="discover-link"><a href="#section-2" class="discover-btn">Get An Account</a></li>
                            <li class="discover-link"><a href="{{ route('login') }}" class="discover-btn">Login</a></li> -->
                            @guest
                                <li class="discover-link" style="display: flex; justify-content: center; align-items: center;">
                                    <a class="discover-btn " href="{{ url('/#section2')}}" style="border-radius: 30px; "> Get An Account </a>
                                </li>
                                <li class="discover-link" style="display: flex; justify-content: center; align-items: center;">
                                    <a class="discover-btn {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}" style="border-radius: 30px; ">Login</a>
                                </li>
                            @else    
                                <li class="discover-link">
                                    @if (Auth::user()->role == 1)
                                    <a href="{{ route('admin.dashboard') }}">
                                        Dashboard
                                    </a>
                                    @endif
                                </li>
                    
                                <li class="discover-link dropdown">
                                    <a class="discover-btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 30px;  display: flex; justify-content: center; align-items: center;">
                                        {{ Auth::user()->name }}
                                    </a>

                                    <ul class="dropdown-menu" style="right: 15px;text-align: right;min-width: 30px;position: absolute;left: unset;padding: 10px 20px;">
                                        <li class="discover-link dropdown" style="text-align: right;">
                                            <a class=" discover-btn" href="{{ route('users.index') }}"
                                            style="color: black;"
                                            >Profile</a>
                                        </li>
                                        <li class="discover-link dropdown" style="text-align: right;">
                                            <a class=" discover-btn" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                            style="color: black;"
                                            >Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                        <!--end navbar-nav -->
                    </div>
                    <!--end navbar-collapse -->
            </div>
    		<!--end container -->
        </nav>
    	<!--end navbar-fixed-top -->
    </header>
    <!--end header -->

    @yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
<!-- Load JS here for greater good =============================-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo-min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>