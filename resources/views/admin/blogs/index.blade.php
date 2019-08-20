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
                                            <th>Author</th>
                                            <th>Photo</th>
                                            <th>title En</th>
                                            <th>العنوان</th>
                                            <th>Content En</th>
                                            <th>المحتوي</th>
                                            <th>View Comments</th>
                                            <th>Edit Blog</th>
                                            <th>Delete Blog</th>
                                        </tr>

                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                            <tr>
                                                <td>{{$blog->user->name}}</td>
                                                <td><img src="/images/{{$blog->photo->name}}" width="60" height="60"></td>
                                                <td>{{$blog->title_en}}</td>
                                                <td>{{$blog->title_ar}}</td>
                                                <td>{{$blog->content_en}}</td>
                                                <td>{{$blog->content_ar}}</td>

                                            <td><a href="{{route('blogcomments.show',$blog->id)}}">view comments</a></td>
                                                <td><a href="{{route('blog.edit',$blog->id)}}">Edit</a></td>
                                                <td>
                                                    <form action="{{route('blog.delete',$blog->id)}}" method="POST">
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
