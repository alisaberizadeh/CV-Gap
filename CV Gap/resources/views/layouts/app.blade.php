<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CV GAP</title>

    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" href="css/templatemo-softy-pinko.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav navbar navbar-expand-sm">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="images/logo.png" alt="Softy Pinko" />
                        </a>


                        <ul class="nav navbar-nav" style="direction: rtl;">
                            <li class="nav-item"><a href="/" class="nav-link">خانه</a></li>

                            @guest
                                <li class="nav-item"><a href="/login" class="nav-link">ورود</a></li>
                                <li class="nav-item"><a href="/register" class="nav-link">عضویت</a></li>
                            @endguest
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fa fa-user"></i> {{ auth()->user()->name }}
                                    </a>
                                    <div class="dropdown-menu" style="direction: rtl;text-align: right">
                                        @if (auth()->user()->is_admin == 1)
                                        <a class="dropdown-item" href="{{route('admin.panel')}}"><i class="fa fa-dashboard"></i> داشبورد کاربری</a>
                                        @else
                                        <a class="dropdown-item" href="{{route('user.panel')}}"><i class="fa fa-dashboard"></i> داشبورد کاربری</a>
                                        @endif

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout_form').submit()"><i
                                                class="fa fa-lock"></i> خروج </a>
                                        <form action="{{ route('logout') }}" method="POST" id="logout_form">@csrf</form>

                                    </div>
                                </li>
                            @endauth

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright"> 2021 &copy; تمامی حقوق این سایت برای سی وی گپ محفوظ می باشد</p>
                </div>
            </div>
        </div>
    </footer>



</body>
<script src="js/app.js"></script>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imgfix.min.js"></script>
<script src="js/custom.js"></script>

</html>
