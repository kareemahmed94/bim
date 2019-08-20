@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-12">
            @include('flash::message')
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                            <thead class="table-primary">

                                        <tr>
                                            <th>Name</th>
                                            <th>Country</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Edit User</th>
                                            <th>Delete User</th>
                                            <th>Status</th>
                                        </tr>

                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>@if($user->country){{$user->country->name}} @else No Country @endif</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td><a href="{{route('user.edit',$user->id)}}">Edit</a></td>
                                                <td>
                                                    <form action="{{route('user.delete',$user->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-link" type="submit">Delete</button>
                                                    </form>
                                                </td>

                                                <td>
                                                    @if($user->block == 1)
                                                      <p>un blocked</p>
                                                    @else
                                                      <p>blocked</p>
                                                    @endif
                                                </td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection


