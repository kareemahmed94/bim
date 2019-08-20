
@extends('layouts.admin')

@section('content')
        <div class="row">
           <div class="col-lg-10 m-auto">
                @include('layouts.form-errors')
              <div class="card">
                <div class="card-body p-5">
                    <form action="{{route('course.update',$course->id)}}" enctype="multipart/form-data" method="POST" class="form-horizontal form-bordered">

                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                                <h3 class="card-title">Update Courae</h3>
                                <hr>
                                    <div class="form-group row">
                                        <label class="control-label">الاسم</label>
                                        <input type="text" name="name_ar" class="form-control" value="{{$course->name_ar}}" required>
                                     </div>
                                    <div class="form-group row">
                                        <label class="control-label">Name</label>
                                       <input type="text" name="name_en" class="form-control" value="{{$course->name_en}}" required>
                                    </div>



                                    <div class="form-group row">
                                            <label>Instructor</label>
                                            <input type="text" class="form-control" name="instructor_id" value="{{$course->instructor->name}}" required>
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                @if($course->photo)<img src="{{asset('/images/'.$course->photo->name)}}" width="60" height="60"> @else No Image @endif
                                            </div>
                                            <div class="col-8">
                                                 <input type="file" name="photo_id" class="form-control">
                                            </div>
                                        </div>
                                    </div>



                                 <div class="form-group row">
                                    <label class="control-label">التفاصيل</label>
                                    <textarea name="details_ar" class="form-control" rows="3">{{$course->details_ar}}</textarea>

                                </div>
                                <div class="form-group row">
                                            <label class="control-label">Details</label>
                                        <textarea name="details_en" class="form-control" rows="3">{{$course->details_en}}</textarea>

                                </div>

                                <div class="form-group row">
                                            <label class="control-label">Price</label>
                                        <input type="text" name="price" class="form-control" value="{{$course->price}}" required>

                               </div>

                            <div class="form-group row">
                                <label class="control-label">Free or Not</label>
                                <select name="is_free" class="form-control">
                                    <option value="1" @if($course->is_free==1) selected @endif>Free</option>
                                    <option value="0" @if($course->is_free==0) selected @endif>Not Free</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <small>From: <span class="text-success">{{$course->from_date}}</span></small>
                                        <input type="date" name="from_date" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <small>To: <span class="text-danger">{{$course->to_date}}</span></small>
                                        <input type="date" name="to_date" class="form-control">
                                    </div>
                                </div>
                            </div>



                        <div class="form-group row">
                            <label class="control-label">Hours</label>
                            <input type="text" name="hours" class="form-control" value="{{$course->hours}}" required>

                        </div>

                        <div class="form-group row">
                            <label class="control-label">Static or Not</label>
                            <select class="form-control">
                                <option @if($course->static==1) selected @endif>Static</option>
                                <option @if($course->static==0) selected @endif>Not Static</option>
                            </select>

                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-info mb-2"> <i class="fa fa-check"></i>update Course</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>

@endsection







