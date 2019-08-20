@extends('layouts.admin')

@section('content')

<div class="row">

    <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <h3 class="">All Notifications</h3>
                            <hr>
                            <thead class="table-primary">
                                        <tr>
                                            <th>Title Ar</th>
                                            <th>Title En</th>
                                            <th>Body Ar</th>
                                            <th>Body En</th>
                                        </tr>

                                </thead>
                                <tbody>
                                         @foreach ($users as $user)
                                             @foreach($user->notifications as $notification)
                                                <tr>
                                                    <td>{{$notification->title_ar}}</td>
                                                    <td>{{$notification->title_en}}</td>
                                                    <td>{{$notification->body_ar}}</td>
                                                    <td>{{$notification->body_en}}</td>
                                                </tr>
                                              @endforeach
                                         @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</div>

@endsection




