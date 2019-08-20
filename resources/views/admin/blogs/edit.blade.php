@extends('layouts.admin')

@section('content')
        <div class="row">

           <div class="col-lg-10 m-auto">
                @include('layouts.form-errors')
              <div class="card p-3">
                {{-- <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Create Blog</h4>
                </div> --}}
             <div class="card-body">

                <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                            <h3 class="card-title">Update Blog</h3>
                            <hr>

                                    <div class="form-group row">
                                        <label class="control-label"> العنوان </label>
                                        <input type="text" name="title_ar" class="form-control" value="{{$blog->title_ar}}" required>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label mt-1">Title English</label>
                                        <input type="text" name="title_en" class="form-control" value="{{$blog->title_en}}" required>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                                <label class="control-label">Photo</label>
                                                <input type="file" name="photo_id" class="form-control">
                                        </div>

                                        <div class="col-lg-6">
                                          <img src="/images/{{$blog->photo->name}}" height="80" width="80" class="mt-2" alt="">
                                        </div>

                                    </div>




                                    <div class="form-group row">
                                        <label class="control-label">المحتوي </label>
                                        <textarea name="content_ar" class="form-control" rows="3">{{$blog->content_ar}}</textarea>
                                        <label class="control-label">Content English</label>
                                        <textarea name="content_en" class="form-control" rows="3">{{$blog->content_en}}</textarea>

                                    </div>


                                    <div class="form-group row">
                                        <label>Author</label>
                                        <select name="author_id" class="form-control">
                                            @foreach($authors as $author)
                                             <option value="{{$author->id}}" @if($author->id == $blog->author_id) selected @endif>{{$author->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-info mb-2"> <i class="fa fa-check"></i>Update Blog</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<!-- Row -->

@endsection



