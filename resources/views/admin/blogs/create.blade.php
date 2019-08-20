@extends('layouts.admin')

@section('content')
        <div class="row">
           <div class="col-lg-10 m-auto">
                @include('layouts.form-errors')
              <div class="card">
                {{-- <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Create Blog</h4>
                </div> --}}
                <div class="card-body p-5">

                <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        @csrf
                        <div class="form-body">
                                <h3 class="card-title">Create Blog</h3>
                                <hr>


                                    <div class="form-group row">
                                        <label class="control-label">العنوان</label>
                                        <input type="text" name="title_ar" class="form-control" placeholder="ادخل العنوان" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title_en" class="form-control" placeholder="Enter Title English" required>
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label">Photo</label>
                                        <input type="file" name="photo_id" class="form-control">
                                    </div>



                                    <div class="form-group row">
                                        <label class="control-label">المحتوي</label>
                                        <textarea name="content_ar" class="form-control" rows="3" placeholder="ادخل المحتوي"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label">Content</label>
                                        <textarea name="content_en" class="form-control" rows="3" placeholder="Enter Content English"></textarea>

                                    </div>


                                    <div class="form-group row">
                                        <label>Author</label>
                                        <select name="author_id" class="form-control">
                                            @foreach($authors as $author)
                                              <option value="{{$author->id}}">{{$author->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-info mb-2"> <i class="fa fa-check"></i> Create Blog</button>
                        </div>
                        </div>
                    </form>
                 </div>
              </div>
           </div>

        </div>
@endsection


