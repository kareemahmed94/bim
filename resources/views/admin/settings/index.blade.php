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
                                            <th>Title</th>
                                            <th>LOGO</th>
                                            <th>Facebook Link </th>
                                            <th>Twitter Link</th>
                                            <th>Linkedin Link</th>
                                            <th>Youtube Link</th>
                                            <th>Download Link</th>
                                            <th>Edit</th>
                                        </tr>
                                </thead>
                                <tbody>

                                    @foreach ($setting as $set)
                                            <tr>

                                                <td>{{$set->title}}</td>
                                                <td>{{$set->logo}}</td>
                                                <td>{{$set->facebook_link}}</td>
                                                <td>{{$set->twitter_link}}</td>
                                                <td>{{$set->limkedin_link}}</td>
                                                <td>{{$set->youtube_link}}</td>
                                                <td>{{$set->download_link}}</td>
                                                <td><a href="{{route('setting.edit',$set->id)}}">Edit</a></td>
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

