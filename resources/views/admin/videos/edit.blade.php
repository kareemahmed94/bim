
@extends('layouts.admin')

@section('content')

    <div class="row">
    @include('layouts.form-errors')


                   <div class="col-lg-10 m-auto">
                      <div class="card">
                    <div class="card-body p-5">

                        <form action="{{route('videos.update',$video->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                            <h3 class="card-title">Update Video</h3>
                            <hr>

                                    <div class="form-group row">
                                        <label class="control-label">الاسم</label>
                                       <input type="text" name="name_ar" class="form-control" value="{{$video->name_ar}}" required>
                                    </div>

                                    <div class="form-group row">
                                            <label class="control-label">Video Name</label>
                                           <input type="text" name="name_en" class="form-control" value="{{$video->name_en}}" required>
                                    </div>

                                    <div class="form-group row">
                                            <label class="control-label">الوصف</label>
                                           <textarea type="text" name="description_ar" class="form-control">{{$video->description_ar}}</textarea>
                                        </div>

                                        <div class="form-group row">
                                                <label class="control-label">Video Description</label>
                                               <textarea type="text" name="description_en" class="form-control">{{$video->description_en}}</textarea>
                                        </div>
                                    <div class="form-group row">
                                        <label class="control-label">Course Name</label>
                                        <select class="form-control custom-select" data-placeholder="Choose a course" name="course_id" tabindex="1">

                                            @foreach($courses as $course)

                                              <option value="{{$course->id}}" @if($video->course->name == $course->name_ar || $video->course->name_en == $course->name_en ) selected @endif >{{$course->name_ar}}</option>

                                            @endforeach
                                        </select>
                                    </div>


                        <div class="form-actions mb-5 ">
                            <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Update Video</button>
                        </div>
                        </div>
                    </form>

             </div>

           </div>

       </div>
    </div>

@endsection

