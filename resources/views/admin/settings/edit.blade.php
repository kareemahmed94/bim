@extends('layouts.admin')

@section('content')
        <div class="row">
           <div class="col-lg-10 m-auto">
                @include('layouts.form-errors')
              <div class="card">
                <div class="card-body p-5">
                    <form action="{{route('setting.update',$setting->id)}}" enctype="multipart/form-data" method="POST" class="form-horizontal form-bordered">

                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                                <h3 class="card-title">Update Settings</h3>
                                <hr>

                                    <div class="form-group row">
                                        <label class="control-label">Title</label>
                                       <input type="text" name="title" class="form-control" value="{{$setting->title}}" required>
                                    </div>



                                    <div class="form-group row">

                                            <div class="col-lg-6">
                                                    <label>LOGO</label>
                                                    <input type="file" class="form-control" name="logo">
                                            </div>
                                            <div class="col-lg-6">
                                            <img src="/images/{{$setting->logo}}" width="100" height="100">
                                            </div>

                                    </div>




                                 <div class="form-group row">
                                    <label class="control-label">Facebook Link</label>
                                 <input type="text" class="form-control" name="facebook_link" value="{{$setting->facebook_link}}">

                                </div>
                                <div class="form-group row">
                                        <label class="control-label">Twitter Link</label>
                                        <input type="text" class="form-control" name="twitter_link"  value="{{$setting->twitter_link}}">

                                </div>

                                <div class="form-group row">
                                        <label class="control-label">Linkedin Link</label>
                                        <input type="text" class="form-control" name="limkedin_link"  value="{{$setting->limkedin_link}}">

                                </div>


                                <div class="form-group row">
                                        <label class="control-label">Youtube Link</label>
                                        <input type="text" class="form-control" name="youtube_link"  value="{{$setting->youtube_link}}">

                                </div>

                                <div class="form-group row">
                                        <label class="control-label">Download Link</label>
                                        <input type="text" class="form-control" name="download_link" value="{{$setting->download_link}}">

                                </div>



                        <div class="form-actions">
                            <button type="submit" class="btn btn-info mb-2"> <i class="fa fa-check"></i>update Setting</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection




