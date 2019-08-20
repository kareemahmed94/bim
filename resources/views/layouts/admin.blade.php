<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- Vector CSS -->
    <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- chartist CSS -->
    <link href="{{asset('assets/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('css/pages/dashboard4.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/colors/default-dark.css')}}" id='theme' rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    {{-- <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]--> --}}
</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin Pro</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav bg-dark">
                <ul id="sidebarnav">
                    {{-- <li class="user-profile"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="{{asset('assets/images/users/profile.png')}}" alt="user" /><span class="hide-menu">Steave Jobs </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="javascript:void()">My Profile </a></li>
                            <li><a href="javascript:void()">My Balance</a></li>
                            <li><a href="javascript:void()">Inbox</a></li>
                            <li><a href="javascript:void()">Account Setting</a></li>
                            <li><a href="javascript:void()">Logout</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-devider"></li>

                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Admins <span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.index')}}">All Admins </a></li>
                            <li><a href="{{route('admin.create')}}">Create Admin</a></li>
                        </ul>
                    </li>


                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu">Users <span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('user.index')}}">All Users </a></li>
                            <li><a href="{{route('user.create')}}">Create User</a></li>
                        </ul>
                    </li>


                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><<i class="mdi mdi-school"></i><span class="hide-menu">Instructors<span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('instructor.index')}}">All Instructors </a></li>
                            <li><a href="{{route('instructor.create')}}">Create Instructor</a></li>
                        </ul>
                    </li>

                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-check-all"></i><span class="hide-menu">Courses</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('course.index')}}">All Courses</a></li>
                            <li><a href="{{route('course.create')}}">Create Course</a></li>
                        </ul>
                    </li>


                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-check-all"></i><span class="hide-menu">Programs</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('programe.index')}}">All Programs</a></li>
                            <li><a href="{{route('programe.create')}}">Create Program</a></li>
                        </ul>
                    </li>



                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gift"></i><span class="hide-menu">Coupons</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('coupon.index')}}">All Coupons</a></li>
                            <li><a href="{{route('coupon.create')}}">Create Coupon</a></li>
                        </ul>
                    </li>


                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-archive"></i><span class="hide-menu">Categories</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('categories.index')}}">All Categories</a></li>
                        </ul>
                    </li>



                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gift"></i><span class="hide-menu">Offers</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('offers.index')}}">All Offers</a></li>
                            <li><a href="{{route('offers.create')}}">Create Offer</a></li>
                        </ul>
                    </li>


                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-numeric-9-plus-box-outline"></i><span class="hide-menu">Orders</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('orders.index')}}">All Orders</a></li>
                        </ul>
                    </li>


                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-video"></i><span class="hide-menu">Videos</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('videos.index')}}">All Videos</a></li>
                            <li><a href="{{route('videos.create')}}">Create Video</a></li>
                        </ul>
                    </li>


                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"> <i class="mdi mdi-blogger"></i><span class="hide-menu">Blogs</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('blog.index')}}">All Blogs</a></li>
                            <li><a href="{{route('blog.create')}}">Create Blog</a></li>
                        </ul>
                    </li>

                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-cellphone-settings"></i><span class="hide-menu">Contacts</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('contacts.index')}}">All Contacts</a></li>
                        </ul>
                    </li>


                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-cellphone-settings"></i><span class="hide-menu">Notifications</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('notifications.index')}}">All Notifications</a></li>
                        </ul>
                    </li>


                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-mouse"></i><span class="hide-menu">Settings</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('settings.index')}}">Site Settings</a></li>
                        </ul>
                    </li>



                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>


    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                     <!-- dark Logo text -->
                     <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                     <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">

                                    @foreach(auth()->user()->notifications as $notification)
                                        <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>{{$notification->title_ar}}</h5> <span class="mail-desc">{{$notification->body_ar}}</span> <span class="time">{{$notification->created_at}}</span> </div>
                                            </a>
                                        @endforeach

                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="{{route('notifications.index')}}"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/users/person-image-icon-7.jpg')}}" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="{{asset('assets/images/users/person-image-icon-7.jpg')}}" alt="user"></div>
                                        <div class="u-text">
                                            <h4>{{auth()->user()->name}}</h4>
                                            <p class="text-muted">{{auth()->user()->email}}</p></div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>

                                <li><a href="{{route('admin.logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="page-wrapper">

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">


                   @yield('content')

            <footer class="footer"> © 2019 Admin Pro by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->

            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- All Jquery -->
            <!-- ============================================================== -->
            <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
            <!-- Bootstrap popper Core JavaScript -->
            <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
            <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
            <!--Wave Effects -->
            <script src="{{asset('js/waves.js')}}"></script>
            <!--Menu sidebar -->
            <script src="{{asset('js/sidebarmenu.js')}}"></script>
            <!--Custom JavaScript -->
            <script src="{{asset('js/custom.min.js')}}"></script>
            <!-- ============================================================== -->
            <!-- This page plugins -->
            <!-- ============================================================== -->
            <!-- Vector map JavaScript -->
            <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
            <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
            <!--sparkline JavaScript -->
            <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
            <!--morris JavaScript -->
            <script src="{{asset('assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
            <script src="{{asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
            <!-- Chart JS -->
            <script src="{{asset('js/dashboard4.js')}}"></script>
            <!-- ============================================================== -->
            <!-- Style switcher -->
            <!-- ============================================================== -->
            <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
            @yield('scripts')

        </div>
    </div>

</div>
</body>

</html>
