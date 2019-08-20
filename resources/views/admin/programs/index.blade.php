@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="p-2">
                @include('flash::message')
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th>Id</th>
                            <th>اسم البرنامج</th>
                            <th>Programe Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach ($programs as $program)

                        <tr>
                            <td>{{$program->id}}</td>
                            <td>{{$program->name_ar}}</td>
                            <td>{{$program->name_en}}</td>
                            <td><a href="{{route('programe.edit',$program->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('programe.delete',$program->id)}}" method="post">
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