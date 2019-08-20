@extends('layouts.admin')

@section('content')
        <div class="row">
            <div class="col-lg-10 m-auto">
                @include('layouts.form-errors')
                <div class="card">
                    {{-- <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">Create User</h4>
                    </div> --}}
                    <div class="card-body p-5">
                        <form action="{{route('instructor.update',$instructor->id)}}" method="POST" enctype="multipart/form-data"  class="form-horizontal form-bordered">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <h3 class="card-title">Update Instructor</h3>
                                <hr>


                                <div class="form-group row">
                                    <label class="control-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$instructor->name}}" required>
                                </div>
                                <!--/row-->


                                <div class="form-group row">
                                    <label class="control-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{$instructor->email}}"  required>
                                </div>
                                <!--/row-->


                                <div class="form-group">

                                    <label class="control-label">Photo</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if($instructor->photo) <img src="{{asset($instructor->photo->path)}}" width="100" height="100">
                                                @else <img src="https://via.placeholder.com/150" width="100" height="100"> @endif
                                        </div>
                                        <div class="col-md-8">
                                           <input type="file" name="photo_id" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->

                                <div class="form-actions mb-5">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Update Instructor</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
@endsection
