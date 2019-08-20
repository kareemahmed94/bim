@include('layouts.front_header')

<body>

<!-- Top Header -->
<div class="top__header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <!-- Social Media -->
                <ul>
                    <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-youtube"></i></a> </li>
                </ul>
                <!-- Social Media -->
            </div>

            <div class="col-md-2 col-sm-6 lang">
                <!-- Language -->
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Ar
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="locale/ar">Ar</a>
                        <a class="dropdown-item" href="locale/en">En</a>
                    </div>
                </div>
                <!-- Language -->
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- Logo -->
                <div class="logo">
                    <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid" />
                </div>
                <!-- Logo -->
            </div>

            <div class="col-md-3 col-sm-6">
                <!-- Login -->
                <div class="login">
                    {{--<p data-toggle="modal" data-target="#exampleModal"> Login </p>--}}
                    @if(Auth::check())
                        <p> <a href="{{ route('front.logout') }}">@lang('home.logout')</a> </p>
                    @else
                        <p data-toggle="modal" data-target="#exampleModal"> @lang('home.login') </p>
                @endif

                <!-- Modal Login -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    {{--<p>@lang('home.login')</p>--}}

                                    <h5 class="modal-title" id="exampleModalLabel">@lang('home.login')</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('front.login.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="user"> @lang('home.email') </label>
                                            <input type="text" class="form-control" id="user" name="email" />
                                        </div>

                                        <div class="form-group">
                                            <label for="pass"> @lang('home.password') </label>
                                            <input type="password" class="form-control" id="pass" name="password"/>
                                        </div>

                                        <input type="submit" class="btn" value="@lang('home.login')" />
                                    </form>

                                    <p> @lang('home.register') </p>

                                    <ul class="social-modal">
                                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                                        <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Login -->

                    <img src="{{ asset('images/login-user.png') }}" alt="login-user" />
                    <!-- Login -->
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="@if(Auth::check()){{ route('front.profile') }} @else {{ route('front.home') }} @endif"><i class="far fa-user"></i>@lang('home.profile')</a>
                            <a class="dropdown-item" href="footer"> <i class="fas fa-cog"></i> Settings</a>
                            <a class="dropdown-item" href="@if(Auth::check()){{ route('front.myorders') }} @else {{ route('front.home') }} @endif"><i class="fas fa-cart-plus"></i>@lang('home.my courses')</a>
                            <a class="dropdown-item" href="{{ route('front.logout') }}"><i class="fas fa-sign-out-alt"></i> @lang('home.logout')</a>
                        </div>
                    </div>
                    <!-- login -->
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header -->

    <div style="background-color: #e8e8e8 !important;">
        <!-- Nav Bar -->
        <nav class="navbar mx-auto navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('front.home')}}">@lang('home.home')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('front.about')}}">@lang('home.about')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('front.courses')}}">@lang('home.courses')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('front.blog')}}">@lang('home.blog')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.instructors') }}">@lang('home.instructors')</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- Nav Bar -->
@include('layouts.front_search')

<!-- Header page -->
<div class="header-page">
    <div class="container">
        <div class="header-info">
            <h2> Name Script </h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumeirmod tempor
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumeirmod tempor
                magna aliquyam erat, sed diam voluptua.</p>
        </div>
    </div>
</div>
<!-- Header page -->

<!-- Designe Page -->
<div class="page-script">
    <div class="container script-text">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/images/'.$course->photo->name) }}" alt="script_name" class="img-fluid" />
            </div>

            <div class="col-md-6 script-right">
                @if(Session('locale') == 'ar')
                        <h3> {{ $course->name_ar }} </h3>
                        <p>{{ $course->details_ar }}</p>
                    @else
                        <h3> {{ $course->name_en }} </h3>
                        <p>{{ $course->details_en }}</p>
                    @endif
            </div>

            <div class="col-md-6 script-left">
                <p> @lang('home.course price'): {{ $course->price }} LE</p>
                <p>@lang('home.course hours'): {{ $course->hours }}</p>
                <p>@lang('home.course instructor'): {{ $course->instructor->name }}</p>
                <div class="row">
                    <div class="col-5">
                        <small>@lang('home.from'): <span class="text-success">{{ $course->from_date }}</span></small>
                    </div>
                    <div class="col-5">
                        <small>@lang('home.to'): <span class="text-danger">{{ $course->to_date }}</span></small>
                    </div>
                </div>
                <div class="mt-4">
                    <h2 style="text-decoration: underline"> @lang('home.order details') </h2>
                    <p>@lang('home.course status'): @if($order->status == 1) <span class="text-success"> @lang('home.approved') </span> @else <span class="text-danger"> @lang('home.un approved') </span> @endif</p>
                </div>
            </div>

            <div class="col-md-6 script-right-btn text-center">
                <button class="btn"> @lang('home.free download') <i class="fas fa-download"></i> </button>
            </div>
        </div>
    </div>
</div>
<!-- Designe Page -->
@include('layouts.front_footer')

@if (session('message'))
    <script>
        Swal.fire(
            '@lang('home.good job')',
            '@lang('home.your contact has been sent')',
        )
    </script>
@endif
