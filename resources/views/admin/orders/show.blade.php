@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                            <thead class="table-primary">
                                        <tr>
                                            <th>Course Name</th>
                                            <th>User Name</th>
                                            <th>User Phone</th>
                                            <th>User Email</th>
                                            <th>Status</th>
                                        </tr>
                                </thead>
                                <tbody>
                                         @foreach ($orders as $order)
                                            <tr>
                                                <td>{{$order->course->name_en}}</td>
                                                <td>{{$order->user->name}}</td>
                                                <td>{{$order->user->phone}}</td>
                                                <td>{{$order->user->email}}</td>
                                                <td>
                                                   <form action="{{route('order.update',$order->id)}}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                            @if($order->status == 0)
                                                            <input type="hidden" name="status" value="1">
                                                             <input  type="submit" value="Approve" class="btn btn-success">
                                                            @else
                                                            <input type="hidden" name="status" value="0">
                                                            <input  type="submit" value="unApprove" class="btn btn-danger">

                                                            @endif

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

