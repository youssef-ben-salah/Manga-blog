 @if (Route::has('login'))
    @auth
 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Profile</title>
    <!-- Google Font -->
    <link href="{{asset ('https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap')}}" rel="stylesheet">
    <link href="{{asset ('https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap')}}"
    rel="stylesheet">

    <!-- Font-awsome -->
    <link rel="stylesheet" href="{{asset('path/to/font-awesome/css/font-awesome.min.css')}}">

    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/plyr.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="display:flex;flex-direction:column;min-height: 100vh;">

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <?php $the_Coordonne = App\Coordonnee::first(); ?>
                    <div class="header__logo">
                        <a href="{{route('Dashboard')}}">
                            <img src="{{voyager::image(@$the_Coordonne->logo)}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                   
                    
                    
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        
                        
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <div id="app"style="background-color:#070720;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="col-lg-10" >
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

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
                                <img src="{{ Auth::user()->avatar }}" style="margin-top: 15px;">
                                <div class="col-lg-12">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                </div>
                                
                            @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Footer Section Begin -->
    <footer class="footer" style="margin-top:auto;">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <?php $the_Coordonne = App\Coordonnee::first(); ?>
                    <div class="footer__logo">
                        <a href="{{route('Dashboard')}}"><img src="{{voyager::image(@$the_Coordonne->logo)}}" alt="" style="float:left; width: 250px;height: 75px;"></a>
                        <p><u style="margin:20px;">{{@$the_Coordonne->email}}</u></p>
                        <p><u style="margin:20px;">{{@$the_Coordonne->numero}}</u></p>
                    </div>
                </div>
                <div class="col-lg-4">
                
                       
                       
                </div>
                <div class="col-lg-3">
                    <p>
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This WebSite is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"><span style="font-family: UnifrakturMaguntia;">Youssef ben salah & Emna esboui</span></a>
                      </p>

                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->

      <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/player.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
@else
<center>
    <div class="alert alert-danger" role="alert">
                            
        please try to connect by your account first<a href="{{ route('login') }}" class="alert-link">Login</a>. Or Give it a click if you like to create one <a href="{{ route('register') }}">Register</a>.
    </div>
</center>
@endauth

@endif 