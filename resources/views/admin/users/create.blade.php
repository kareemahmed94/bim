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
                    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data"  class="form-horizontal form-bordered">
                        @csrf
                        <div class="form-body">
                                <h3 class="card-title">Create User</h3>
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
                                <label class="control-label">Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="enter phone number" required>
                            </div>
                            <!--/row-->

                            <div class="form-group row">
                                    <label class="control-label">Country</label>
                                        <select class="form-control custom-select" data-placeholder="Choose a Category" name="country_id" tabindex="1">

                                            @foreach($countries as $country)
                                              <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                            </div>



                            <div class="form-group row">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" required>
                           </div>


                           <div class="form-group row">
                                        <label>Status</label>
                                        <select class="form-control custom-select"  name="block" tabindex="1">

                                            <option value="1">un blocked</option>
                                            <option value="0"> blocked</option>

                                        </select>
                          </div>


                                <div class="form-actions mb-5">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Create user</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
@endsection