@extends('layouts.front')
@section('content')
    <!-- Intro -->
    <div class='intro'>
        <h1> @lang('home.start') </h1>
        <!-- <i class="fas fa-chevron-down"></i> -->
        <a href="#section2"> <img src="{{asset('images/UI_Light_chevron_down-512.png')}}" class="animated infinite bounce"
                                  alt='' /> </a>
    </div>
    <!-- Intro -->

    </div>

    <!-- Services -->
    <div class="services" id="section2">
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-md-4">

                        <img src="{{asset('images/'.$course->photo->name)}}" alt="" class="mx-auto d-block img-fluid" />
                        @if(Session('locale')=='ar')
                            <h3> {{$course->name_ar}} </h3>
                            <p> {{$course->details_ar}} </p>
                        @else
                            <h3> {{$course->name_en}} </h3>
                            <p> {{$course->details_en}} </p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services -->


    <!-- Logos -->
    <div class="logos">
        <h3> @lang('home.our clients') </h3>
        <div class="container">
            <div class="owl-carousel owl-theme" id='logos'>
                @foreach($clients as $client)
                    <div class="item">
                        <h4>{{$client->name}}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Logos -->
    @endsection

@section('scripts')
    @if (session('message'))
        <script>
        Swal.fire(
        '@lang('home.good job')',
        '@lang('home.your contact has been sent')',
        )
        </script>
    @endif
@endsection





