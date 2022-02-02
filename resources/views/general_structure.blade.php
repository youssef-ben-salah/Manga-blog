<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','default_page')</title>

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
</head>

<body style="display:flex;flex-direction: column; min-height: 100vh;">
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
                    @if (Route::has('login'))
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            @auth
                                <ul>
                                    <li><a href="#">home <span class="arrow_carrot-down"></span></a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('Profile')}}"><i class="fa fa-user" aria-hidden="true" style="margin-right: 15px;"></i>Profile</a></li>
                                            <li><a href="{{route('Login')}}"><i class="fa fa-sign-out" aria-hidden="true" style="margin-right: 15px;"></i>Logout</a></li>    
                                        </ul>
                                    </li>
                                </ul>
                            @else
                                <ul>
                                    <li><a href="#">home <span class="arrow_carrot-down"></span></a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('Register')}}"><i class="fa fa-user-plus" aria-hidden="true" style="margin-right: 15px;"></i>Sign Up</a></li>
                                            <li><a href="{{route('Login')}}"><i class="fa fa-sign-in" aria-hidden="true" style="margin-right: 15px;"></i>Login</a></li>    
                                        </ul>
                                    </li>
                                </ul>

                                
                            @endauth
                        </nav>
                    
                    </div>
                    @endif
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="#">
                            <span class="icon_profile ">
                            </span>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <main>
        @yield('main')
    </main>


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
                    @if (Route::has('login'))
                        <div class="footer__nav">
                            @auth


                            @else
                            <ul>
                                <li><a href="{{route('Register')}}"><i class="fa fa-user-plus" aria-hidden="true" style="margin-right: 15px;"></i>Sign Up</a></li>
                                <li><a href="{{route('Login')}}"><i class="fa fa-sign-in" aria-hidden="true" style="margin-right: 15px;"></i>Login</a></li>
                            </ul>
                            @endauth
                        </div>
                    @endif   
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