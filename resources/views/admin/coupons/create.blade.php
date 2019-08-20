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
                        <form action="{{route('coupon.store')}}" method="POST" enctype="multipart/form-data"  class="form-horizontal form-bordered">
                            @csrf
                            <div class="form-body">
                                <h3 class="card-title">Create Coupon</h3>
                                <hr>

                                <div class="form-group row">
                                    <label class="control-label">Code</label>
                                    <input type="integer" name="code" class="form-control" placeholder="Enter Code" required>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label">Discount</label>
                                    <input type="number" name="discount" class="form-control" placeholder="Enter Discount" required>

                                </div>
                                <!--/row-->

                                <div class="form-group row">
                                    <label class="control-label">Discount type</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" name="discount_type" tabindex="1">
                                            <option value="type1">type1</option>
                                            <option value="type2">type2</option>
                                            <option value="type3">type3</option>
                                    </select>
                                </div>


                                <div class="form-group row">
                                    <label>Limit Use</label>
                                    <input type="number" class="form-control" name="limit_use" placeholder="Enter Limit Use" required>
                                </div>

                                <div class="form-group row">
                                    <label>Minimum Amount</label>
                                    <input type="number" class="form-control" name="min_amount" placeholder="Enter Minimum Amount" required>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>From Date</label>
                                        <input type="date" class="form-control" name="from_date" required>
                                    </div>
                                    <div class="col-6">
                                        <label>To Date</label>
                                        <input type="date" class="form-control" name="to_date" required>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Create Coupon</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection