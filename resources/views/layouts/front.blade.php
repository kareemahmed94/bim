<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses Web</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
</head>

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

<div class="header">
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


    @yield('content')


<!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3> Solutions </h3>
                    <ul class="links list-unstyled">
                               @php
                                 $courses=App\Course::where('static',1)->get();
                                @endphp
                        @foreach($courses as $course)
                        <li><a href=""></a> {{$course->name_ar}} </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-4">
                    <div class="footer_middle">
                        <img src="{{asset('images/logo.png')}}" alt="">
                        <!-- Social Media -->

                        <ul>
                            @php
                                $setting=App\Setting::first();
                            @endphp
                            <li> <a href="{{$setting->facebook_link}}"> <i class="fab fa-facebook-f"></i> </a> </li>
                            <li> <a href="{{$setting->twitter_link}}"> <i class="fab fa-twitter"></i> </a> </li>
                            <li> <a href="{{$setting->limkedin_link}}"> <i class="fab fa-linkedin-in"></i> </a> </li>
                            <li> <a href="{{$setting->youtube_link}}"> <i class="fab fa-youtube"></i></a> </li>
                        </ul>
                        <!-- Social Media -->
                        <p> <i class="fas fa-download"></i> @lang('home.download desktop application') </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3 class="text-center"> @lang('home.contact us') </h3>
                    <form action="{{route('front.contact')}}" method="post">
                        @csrf
                        <label for="name"> @lang('home.name') </label>
                        <input type="text" class="form-control" name="name" required>

                        <label for="email"> @lang('home.email')  </label>
                        <input type="email" class="form-control" name="email" required>

                        <label for="message"> @lang('home.message')  </label>
                        <textarea name="message" class="form-control text_area" required></textarea>

                        <button class="btn-block" type="submit"> <i class="far fa-envelope-open"></i> </button>
                    </form>
                </div>
            </div>
            <div class="copy">
                <div class="container">
                    <p class="pull-left"> @lang('home.powered by') </p>
                </div>
            </div>
        </div>


    </div>
    <!-- Footer -->

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('sweetalert2.all.min.js')}}"></script>
    @yield('scripts')
</body>
</html>



