@extends('layouts.admin')

@section('content')
      <div class="row">
        <div class="col-lg-10 m-auto">
                @include('layouts.form-errors')
            <div class="card">
                {{-- <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Update Admin</h4>
                </div> --}}
                <div class="card-body p-5">
                    <form action="{{route('admin.update',$admin->id)}}" method="POST" enctype="multipart/form-data"  class="form-horizontal form-bordered">
                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                                <h3 class="card-title">Update Admin</h3>
                                <hr>

                                    <div class="form-group row">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$admin->name}}" required>
                                    </div>



                                    <div class="form-group row">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{$admin->email}}" required>
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label">Roles</label>
                                        <select class="form-control custom-select" data-placeholder="Choose a Category" name="role_id" tabindex="1">

                                            @foreach($roles as $role)

                                              <option value="{{$role->id}}"  @if($admin->role->name == $role->name) selected @endif>{{$role->name}}</option>

                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password">

                                    </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Update Admin</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection