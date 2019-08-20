@extends('layouts.admin')

@section('content')
        <div class="row">


            <div class="col-lg-10 m-auto">

                <div class="card">
                    @include('layouts.form-errors')
                    {{-- <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">Create Admin</h4>
                    </div> --}}
                    <div class="card-body p-5">
                        <form action="{{route('coupon.update',$coupon->id)}}" method="POST" enctype="multipart/form-data"  class="form-horizontal form-bordered">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <h3 class="card-title">Update Coupon</h3>
                                <hr>

                                <div class="form-group row">
                                    <label class="control-label">Code</label>
                                    <input type="integer" name="code" class="form-control" value="{{$coupon->code}}" required>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label">Discount</label>
                                    <input type="number" name="discount" class="form-control" value="{{$coupon->discount}}"  required>

                                </div>
                                <!--/row-->

                                <div class="form-group row">
                                    <label class="control-label">Discount type</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" name="discount_type" tabindex="1">
                                        <option value="type1" @if($coupon->discount_type == 'type1') selected @endif>type1</option>
                                        <option value="type2" @if($coupon->discount_type == 'type2') selected @endif>type2</option>
                                        <option value="type3" @if($coupon->discount_type == 'type3') selected @endif>type3</option>
                                    </select>
                                </div>


                                <div class="form-group row">
                                    <label>Limit Use</label>
                                    <input type="number" class="form-control" name="limit_use" value="{{$coupon->limit_use}}" required>
                                </div>

                                <div class="form-group row">
                                    <label>Minimum Amount</label>
                                    <input type="number" class="form-control" name="min_amount" value="{{$coupon->min_amount}}" required>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <small>From  : <span class="text-success">{{$coupon->from_date}}</span></small>
                                        <input type="date" class="form-control" name="from_date">
                                    </div>
                                    <div class="col-6">
                                        <small>To :  <span class="text-danger">{{$coupon->to_date}}</span></small>
                                        <input type="date" class="form-control" name="to_date">
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Update Coupon</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Row -->
@endsection