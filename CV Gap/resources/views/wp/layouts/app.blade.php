<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ادمین | پنل مدیریت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/bootstrap-rtl.min.css') }}">
    <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/admin/demo.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/admin/adminlte.min.js') }}"></script>

</head>

<body class="hold-transition sidebar-mini">
    @include('sweet::alert')
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">خانه</a>
                </li>
            </ul>


            <ul class="navbar-nav mr-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 ml-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        حسام موسوی
                                        <span class="float-left text-sm text-danger"><i
                                                class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">با من تماس بگیر لطفا...</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle ml-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        پیمان احمدی
                                        <span class="float-left text-sm text-muted"><i
                                                class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">من پیامتو دریافت کردم</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle ml-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        سارا وکیلی
                                        <span class="float-left text-sm text-warning"><i
                                                class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                        <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-envelope ml-2"></i> 4 پیام جدید
                            <span class="float-left text-muted text-sm">3 دقیقه</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-users ml-2"></i> 8 درخواست دوستی
                            <span class="float-left text-muted text-sm">12 ساعت</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-file ml-2"></i> 3 گزارش جدید
                            <span class="float-left text-muted text-sm">2 روز</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-recycle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                        <span class="dropdown-item dropdown-header">بازیافت اطلاعات</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-users ml-2"></i> کاربران حذف شده
                            <span class="badge badge-danger float-left">3</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" onclick="event.preventDefault();document.getElementById('deleteForm').submit()" data-toggle="dropdown" href="/logout">
                        <i class="fa fa-power-off"></i>
                    </a>
                    <form action="{{route('logout')}}" method="POST" id="deleteForm">@csrf</form>

                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="../../index3.html" class="brand-link">

                <span class="brand-text font-weight-light">پنل مدیریت</span>
            </a>

            <div class="sidebar">
                <div>
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset(auth()->user()->avatar) }}" class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><strong>{{ auth()->user()->name }}</strong> <br>
                            نقش : 
                            @if (auth()->user()->is_admin == 2)
                                <strong>مدیر کل </strong>
                                @else
                                <strong>مدیر</strong>
                            @endif
                            </a>
                            
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        پیشخوان
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="{{ route('admin.profile') }}" class="nav-link">
                                    <i class="nav-icon fa fa-address-card"></i>
                                    <p>
                                        اطلاعات کاربری
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-users"></i>
                                    <p>
                                        کاربران
                                        <i class="fa fa-angle-left right"></i>
                                    </p>

                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('user.new') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>افزودن کاربر جدید</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.management') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>مدیریت کاربران</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            
                            <li class="nav-item has-treeview">
                                <a href="{{route('categories')}}" class="nav-link">
                                    <i class="nav-icon fa fa-th"></i>
                                    <p>
                                        دسته بندی مقالات
                                    </p>

                                </a>
                               
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </aside>


        <div class="content-wrapper">
            @yield('content')
        </div>





    </div>



</body>

</html>
