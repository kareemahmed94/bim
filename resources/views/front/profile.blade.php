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


            <!-- Login -->
            {{--<div class="login">--}}
            {{--@if(Auth::check())--}}
            {{--<p> <a href="{{ route('front.logout') }}" style="color:white">@lang('home.logout')</a> </p>--}}
            {{--@else--}}
            {{--<p> <a href="{{ route('front.login') }}" style="color:white">@lang('home.login')</a> </p>--}}
            {{--@endif--}}

            {{--<img src="{{asset('images/login-user.png')}}" alt="login-user" />--}}
            {{--</div>--}}
            {{--<!-- Login -->--}}

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
<!-- Nav Bar -->

@include('layouts.front_search')

<!-- Header page -->
<div class="header-page">
    <div class="container">
        <div class="header-info">
            <div class="media">
                <img src="{{ asset('images/user_person.png') }}" alt="" class="img-fluid mr-3" />
                <div class="media-body">
                    <h2> {{ auth()->user()->name }} </h2>
                    <p> {{ auth()->user()->email  }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header page -->

<!-- About Page -->
<div class="page-profile">
    <div class="container profile-text">
        <form method="POST" action="{{ route('front.profile.update',auth()->user()->id) }}">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-md-2">
                    <label for="username"> @lang('home.user name') </label>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="input-group-append">
                        <i class="fas fa-cog"></i>
                    </div>
                    <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}"/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="email"> @lang('home.email') </label>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="input-group-append">
                        <i class="fas fa-cog"></i>
                    </div>
                    <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}"/>

                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="phone"> @lang('home.phone') </label>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="input-group-append">
                        <i class="fas fa-cog"></i>
                    </div>
                    <input type="number" class="form-control" name="phone" value="{{ auth()->user()->phone }}"/>

                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="pass"> @lang('home.password') </label>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="input-group-append">
                        <i class="fas fa-cog"></i>
                    </div>
                    <input type="password" class="form-control" name='password'/>
                </div>
            </div>

            <input type="submit" class="btn btn-info" value="@lang('home.save')" />

        </form>
    </div>
</div>
<!-- About Page -->

@include('layouts.front_footer')

    @if (session('contact'))
        <script>
            Swal.fire(
                '@lang('home.good job')',
                '@lang('home.your account updated successfully')',
            )
        </script>
    @endif

@if (session('message'))
    <script>
        Swal.fire(
            '@lang('home.good job')',
            '@lang('home.your contact has been sent')',
        )
    </script>
@endif

