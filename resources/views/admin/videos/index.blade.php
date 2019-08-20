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
                                            <th>الاسم</th>
                                            <th>Name</th>
                                            <th>الوصف</th>
                                            <th>Description</th>
                                            <th>Course Name</th>
                                            <th>Videos</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>

                                </thead>
                                <tbody>
                                    @foreach($videos as $video)
                                            <tr>
                                            <td>{{$video->name_ar}}</td>
                                            <td>{{$video->name_en}}</td>
                                            <td>{{$video->description_ar}}</td>
                                            <td>{{$video->description_en}}</td>
                                            <td>{{$video->course ? $video->course ->name_en : 'no related course'}}</td>
                                            <td>
                                              <video src="{{$video->path}}" width="50" height="50"></video>
                                            </td>

                                            <td><a href="{{route('videos.edit',$video->id)}}">Edit</a></td>

                                                <td>
                                                    <form action="{{route('videos.delete',$video->id)}}" method="POST">
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



