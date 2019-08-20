@extends('layouts.admin')

@section('content')
        <div class="row">
           <div class="col-lg-8 m-auto">
                @include('layouts.form-errors')
              <div class="card">
                {{-- <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Update Offer</h4>
                </div> --}}
                <div class="card-body p-5">

                <form action="{{route('offers.update',$offer->id)}}"  method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">

                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                                <h3 class="card-title">Update Offer</h3>
                                <hr>

                                    <div class="form-group row">
                                        <label class="control-label">Course Name</label>
                                        <select name="course_id" class="form-control">
                                            @foreach ($courses as $course)

                                                 <option value="{{$course->id}}" @if ($course->name_en == $offer->course->name_en) selected @endif>{{$course->name_en}}</option>

                                            @endforeach

                                        </select>
                                    </div>

                                        <div class="form-group row">
                                            <label>New Price</label>
                                           <input type="text" class="form-control" name="newprice" value="{{$offer->newprice}}" required>
                                        </div>


                            <div class="form-group row">
                                <label>وصف العرض</label>
                                <textarea name="description_ar" class="form-control">{{$offer->description_ar}}</textarea>
                            </div>

                            <div class="form-group row">
                                <label>description</label>
                                <textarea name="description_en" class="form-control">{{$offer->description_en}}</textarea>
                            </div>

                            <div class="form-group row">
                                <label>Amount</label>
                                <input type="number" class="form-control" name="amount" value="{{$offer->amount}}">
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <small>From : <span class="text-success">{{$offer->from_date}}</span></small>
                                    <input type="date" class="form-control" name="from_date">
                                </div>
                                <div class="col-6">
                                    <small>To : <span class="text-danger">{{$offer->to_date}}</span></small>
                                    <input type="date" class="form-control" name="to_date">
                                </div>
                            </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Update Offer</button>
                        </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->


@endsection
