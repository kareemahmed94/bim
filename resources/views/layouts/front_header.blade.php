<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses Web</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">


</head>

{{--<body class="header-2">--}}

{{--<!-- Top Header -->--}}
{{--<div class="top__header">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<!-- Social Media -->--}}
                {{--<ul>--}}
                    {{--@php--}}
                        {{--$setting=App\Setting::first();--}}
                    {{--@endphp--}}
                    {{--<li> <a href="{{$setting->facebook_link}}"> <i class="fab fa-facebook-f"></i> </a> </li>--}}
                    {{--<li> <a href="{{$setting->twitter_link}}"> <i class="fab fa-twitter"></i> </a> </li>--}}
                    {{--<li> <a href="{{$setting->limkedin_link}}"> <i class="fab fa-linkedin-in"></i> </a> </li>--}}
                    {{--<li> <a href="{{$setting->youtube_link}}"> <i class="fab fa-youtube"></i></a> </li>--}}
                {{--</ul>--}}
                {{--<!-- Social Media -->--}}
            {{--</div>--}}

            {{--<div class="col-md-2 col-sm-6 lang">--}}
                {{--<!-- Language -->--}}
                {{--<div class="dropdown">--}}
                    {{--<a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"--}}
                       {{--aria-haspopup="true" aria-expanded="false">--}}
                        {{--En--}}
                    {{--</a>--}}

                    {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
                        {{--<a class="dropdown-item" href="locale/ar">Ar</a>--}}
                        {{--<a class="dropdown-item" href="locale/en">En</a>--}}
                        {{--<a class="dropdown-item" href="{{ route('localization', ['locale' => 'ar']) }}">Ar</a>--}}
                        {{--<a class="dropdown-item" href="{{ route('localization', ['locale' => 'en']) }}">En</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Language -->--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6">--}}
                {{--<!-- Logo -->--}}
                {{--<div class="logo">--}}
                    {{--<img src="{{asset('images/logo.png')}}" alt="" class="img-fluid" />--}}
                {{--</div>--}}
                {{--<!-- Logo -->--}}
            {{--</div>--}}

            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<!-- Login -->--}}
                {{--<div class="login">--}}
                    {{--@if(Auth::check())--}}
                        {{--<p> <a href="{{ route('front.logout') }}" style="color:white">@lang('home.logout')</a> </p>--}}
                    {{--@else--}}
                    {{--<p> <a href="{{ route('front.login') }}" style="color:white">@lang('home.login')</a> </p>--}}
                    {{--@endif--}}
                    {{--@if(auth()->user())--}}
                        {{--<img src="{{asset('/images/'.auth()->user()->photo->name)}}" alt="login-user" />--}}
                    {{--@else--}}
                        {{--<img src="{{asset('images/login-user.png')}}" alt="login-user" />--}}
                    {{--@endif--}}
                    {{--<img src="{{asset('images/login-user.png')}}" alt="login-user" />---}}
                {{--</div>--}}
                {{--<!-- Login -->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- Top Header -->--}}


{{--<!-- Nav Bar -->--}}
{{--<nav class="navbar mx-auto navbar-expand-lg navbar-light bg-light">--}}
    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"--}}
            {{--aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
    {{--</button>--}}
    {{--<div class="collapse navbar-collapse" id="navbarNavDropdown">--}}
        {{--<ul class="navbar-nav">--}}
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="{{route('front.home')}}">@lang('home.home')</a>--}}
            {{--</li>--}}

            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{route('front.about')}}">@lang('home.about')</a>--}}
            {{--</li>--}}

            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{route('front.courses')}}">@lang('home.courses')</a>--}}
            {{--</li>--}}

            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{route('front.blog')}}">@lang('home.blog')</a>--}}
            {{--</li>--}}

            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('front.instructors') }}">@lang('home.instructors')</a>--}}
            {{--</li>--}}

            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('front.myorders') }}">@lang('home.my courses')</a>--}}
            {{--</li>--}}

            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('front.profile') }}">@lang('home.profile')</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}
{{--<!-- Nav Bar -->--}}
