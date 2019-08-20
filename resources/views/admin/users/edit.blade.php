@extends('layouts.admin')

@section('content')
        <div class="row">
           <div class="col-lg-10 m-auto">
                @include('layouts.form-errors')
              <div class="card">
                <div class="card-body p-5">
                    <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data"  class="form-horizontal form-bordered">
                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                                <h3 class="card-title">Update User</h3>
                                <hr>
                                   <div class="form-group row">
                                        <label class="control-label">Name</label>
                                       <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                                   </div>


                                    <div class="form-group row">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{$user->email}}" required>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label">Phone</label>
                                        <input type="number" name="phone" class="form-control" value="{{$user->phone}}" required>
                                    </div>

                          

                                    <div class="form-group row">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password">
                                    </div>


                                    <div class="form-group row">
                                        <label>Status</label>
                                        <select class="form-control custom-select"  name="block" tabindex="1">
                                                @if($user->status == 1)
                                                <option value="1">un blocked</option>
                                                @else
                                                <option value="0">blocked</option>
                                                @endif

                                            <option value="1">un blocked</option>
                                            <option value="0"> blocked</option>

                                         </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                        <div class="form-actions ml-3 mb-5">
                            <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Update user</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    <!-- Row -->
@endsection