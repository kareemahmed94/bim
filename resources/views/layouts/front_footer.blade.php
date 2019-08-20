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
                        <li><a href=""></a> @if(Session('locale')=='ar') {{$course->name_ar}} @else {{$course->name_en}} @endif</li>
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
                    <p><a href="{{$setting->download_link}}" class="text-white"><i class="fas fa-download"></i> @lang('home.download desktop application') </a></p>
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="text-center"> @lang('home.contact us') </h3>
                <form action="{{ route('front.contact') }}" method="post">
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
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('sweetalert2.all.min.js')}}"></script>

{{--@yield('scripts')--}}

</body>
</html>