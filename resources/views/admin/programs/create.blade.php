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

                        <form action="{{route('programe.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            @csrf
                            <div class="form-body">
                                <h3 class="card-title">Create Programe</h3>
                                <hr>

                                <div class="form-group row">
                                    <label class="control-label">اسم البرنامج</label>
                                    <input type="text" name="name_ar" class="form-control" placeholder="ادخل اسم البرنامج..">
                                </div>

                                <div class="form-group row">
                                    <label class="control-label">Programe Name</label>
                                    <input type="text" name="name_en" class="form-control" placeholder="program name...">
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Create Programe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Row -->
@endsection



