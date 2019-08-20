@extends('layouts.admin')

@section('content')
        <div class="row">
           <div class="col-lg-8 m-auto">
                @include('layouts.form-errors')
              <div class="card">
                {{-- <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Create Offer</h4>
                </div> --}}
                <div class="card-body p-5">

                <form action="{{route('offers.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        @csrf
                        <div class="form-body">
                                <h3 class="card-title">Create Offer</h3>
                                <hr>
                                    <div class="form-group row">
                                        <label class="control-label">Course Name</label>
                                        <select name="course_id" class="form-control">
                                            @foreach ($courses as $course)
                                               <option value="{{$course->id}}">{{$course->name_en}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                            <!--/row-->

                                <div class="form-group row">
                                            <label>New Price</label>
                                            <input type="text" class="form-control" name="newprice" required>
                                </div>

                            <div class="form-group row">
                                <label>وصف العرض</label>
                                <textarea name="description_ar" class="form-control" placeholder="ادخل وصف العرض"></textarea>
                            </div>

                            <div class="form-group row">
                                <label>description</label>
                                <textarea name="description_en" class="form-control" placeholder="description...."></textarea>
                            </div>

                            <div class="form-group row">
                                <label>Amount</label>
                                <input type="number" class="form-control" name="amount" required>
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
                               <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Create Offer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

@endsection





