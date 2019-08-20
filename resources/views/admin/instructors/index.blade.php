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
                                    <th>Email</th>
                                    <th>Photo</th>
                                    <th>Edit Instructor</th>
                                    <th>Delete Instructor</th>
                                </tr>

                                </thead>
                                <tbody>
                                @foreach($instructors as $instructor)
                                    <tr>
                                        <td>{{$instructor->name}}</td>
                                        <td>{{$instructor->email}}</td>
                                        <td>
                                            @if($instructor->photo)
                                            <img src="{{asset($instructor->photo->path)}}" width="60" height="60">
                                                @else
                                                <img src="https://via.placeholder.com/150" width="60" height="60">
                                                @endif
                                        </td>
                                        <td><a href="{{route('instructor.edit',$instructor->id)}}">Edit</a></td>
                                        <td>
                                            <form action="{{route('instructor.delete',$instructor->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-link" type="submit">Delete</button>
                                            </form>
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


