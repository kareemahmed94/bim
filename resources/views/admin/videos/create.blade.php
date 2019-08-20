
@extends('layouts.admin')

@section('content')
        <div class="row">
           <div class="col-lg-10 m-auto">
                @include('layouts.form-errors')
              <div class="card">
                <div class="card-body p-5">

                <form action="{{route('videos.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        @csrf

                        <div class="form-body">
                                <h3 class="card-title">Create Video</h3>
                                <hr>


                                <div class="form-group row">
                                        <label for="">Choose Course Name</label>
                                        <select name="course_id" class="form-control">
                                          @foreach($courses as $course)
                                              <option value="{{$course->id}}">{{$course->name_en}}</option>
                                          @endforeach
                                        </select>
                                </div>

                                <div class="form-group row">
                                        <label class="control-label">Enter Videos Number Here</label>
                                        <input id="videos_number" type="number" name="videos_number" class="form-control">
                                </div>
                                        <div id="videos-data">
                                              {{-- video data --}}
                                        </div>


                                <div class="form-actions mb-5 ">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Store Video</button>
                                </div>





                        </div>
                   </form>

                    @section('scripts')
                        <script>
                            $("#videos_number").change(function(){
                                var i = $(this).val();
                                var x;
                                for(x=0;x<i;x++){
                                    $("#videos-data").append('<div class="form-group row"><label class="control-label">الاسم'+parseInt(x+1)+'</label><input type="text" name="video_name_ar[]" placeholder="الاسم" class="form-control"></div><div class="form-group row"><label class="control-label">Video Name '+parseInt(x+1)+'</label><input type="text" name="video_name_en[]" placeholder="Video Name" class="form-control"></div><div class="form-group row"><label class="control-label">الوصف'+ parseInt(x+1) +'</label><textarea class="form-control" name="video_description_ar[]" placeholder="الوصف"></textarea> </div><div class="form-group row"><label class="control-label">Video Description '+ parseInt(x+1) +'</label><textarea class="form-control" name="video_description_en[]" placeholder="Video Description"></textarea> </div><div class="form-group row"><hr>');
                                }
                            });
                        </script>
                    @endsection
                </div>
              </div>
           </div>
        </div>
@endsection
                                {{-- <div class="form-group row">
                                    <button class="btn btn-info" id="add_video">add video <span class="p-2">+</span></button>
                                </div>

                                <div id="input_tag">

                                </div>


                                    <div class="form-group row">
                                        <label class="control-label">الاسم</label>
                                        <input type="text" name="name_ar" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                            <label class="control-label">Video Name</label>
                                            <input type="text" name="name_en" class="form-control">
                                    </div>

                                    <div class="form-group row">
                                                    <label class="control-label">الوصف</label>
                                                    <input type="text" name="description_ar" class="form-control"   >
                                    </div>

                                    <div class="form-group row">
                                            <label class="control-label">Details</label>
                                            <input type="text" name="description_en" class="form-control"   >
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label">Course Name</label>
                                        <select class="form-control custom-select" name="course_id" tabindex="1">

                                            @foreach($courses as $course)
                                              <option value="{{$course->id}}">{{$course->name_ar}}</option>

                                            @endforeach
                                        </select>
                                    </div>

                        <div class="form-actions mb-5 ">
                            <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Store Video</button>
                        </div>


                        <script>
                                $("#add_video").click(function(){


                                   $("#input_tag").append('<div class="form-group row"><label class="control-label">الاسم</label><input type="text" name="name_ar" placeholder="الاسم" class="form-control"></div><div class="form-group row"><label class="control-label">Video Name</label><input type="text" name="name_en" placeholder="Video Name" class="form-control"></div><div class="form-group row"><label class="control-label">الوصف</label><textarea class="form-control" name="description_ar" placeholder="الوصف"></textarea></div><div class="form-group row"><label class="control-label">Video Description</label><textarea class="form-control" name="description_en" placeholder="Video Description"></textarea></div><div class="form-group row"><label class="control-label">Course Name</label><select class="form-control custom-select" name="course_id" tabindex="1">@foreach($courses as $course)<option value="{{$course->id}}">{{$course->name_ar}}</option>@endforeach</select></div><hr>');
                                });
                        </script>
                  </form>
              </div>
           </div>
       </div>

   </div><!-- Row -->
</div> --}}



