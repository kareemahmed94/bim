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
                                            <th>Instructor</th>
                                            <th>Category</th>
                                            <th>التفاصيل</th>
                                            <th>Details</th>
                                            <th>start date</th>
                                            <th>end date</th>
                                            <th>Price</th>
                                            <th>Free or Not</th>
                                            <th>Hours</th>
                                            <th>Static or Not</th>
                                            <th>View Comments</th>
                                            <th>Edit course</th>
                                            <th>Delete course</th>
                                        </tr>

                                </thead>
                                <tbody>
                                         @foreach ($courses as $course)


                                            <tr>
                                                <td>{{$course->name_ar}}</td>
                                                <td>{{$course->name_en}}</td>
                                                <td>{{$course->instructor->name}}</td>
                                                <td>{{$course->category ? $course->category->name : 'unCategorized' }}</td>
                                                <td>{{str_limit($course->details_ar,50)}}</td>
                                                <td>{{str_limit($course->details_en,50)}}</td>
                                                <td>{{$course->from_date}}</td>
                                                <td>{{$course->to_date}}</td>
                                                <td>{{$course->price}}</td>
                                                <td>@if($course->is_free==1) Free @else NotFree @endif</td>
                                                <td>{{$course->hours}}</td>
                                                <td>@if($course->static==1) Static @else Not Static @endif</td>
                                                <td><a href="{{route('coursecomments.show',$course->id)}}">view comments</a></td>

                                                <td><a href="{{route('course.edit',$course->id)}}">Edit</a></td>
                                                <td>
                                                       <form action="{{route('course.delete',$course->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" value="Delete" class="btn btn-link">
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


