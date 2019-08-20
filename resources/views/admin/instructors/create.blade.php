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
                        <form action="{{route('instructor.store')}}" method="POST" enctype="multipart/form-data"  class="form-horizontal form-bordered">
                            @csrf
                            <div class="form-body">
                                <h3 class="card-title">Create Instructor</h3>
                                <hr>


                                <div class="form-group row">
                                    <label class="control-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                </div>
                                <!--/row-->


                                <div class="form-group row">
                                    <label class="control-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="someone@yahoo.com" required>
                                </div>
                                <!--/row-->


                                <div class="form-group row">
                                    <label class="control-label">Photo</label>
                                    <input type="file" name="photo_id" class="form-control">
                                </div>
                                <!--/row-->


                                <div class="form-actions mb-5">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Create Instructor</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->

@endsection