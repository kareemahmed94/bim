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
                                    <th>Code</th>
                                    <th>Discount</th>
                                    <th>Discount Type</th>
                                    <th>Limit Use</th>
                                    <th>Min Amount</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>

                                </thead>
                                <tbody>
                                @foreach($coupons as $coupon)
                                    <tr>
                                        <td>{{$coupon->code}}</td>
                                        <td>{{$coupon->discount}}</td>
                                        <td>{{$coupon->discount_type}}</td>
                                        <td>{{$coupon->limit_use}}</td>
                                        <td>{{$coupon->min_amount}}</td>
                                        <td>{{$coupon->from_date}}</td>
                                        <td>{{$coupon->to_date}}</td>
                                        <td><a href="{{route('coupon.edit',$coupon->id)}}">Edit</a></td>
                                        <td>
                                            <form action="{{route('coupon.delete',$coupon->id)}}" method="POST">
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