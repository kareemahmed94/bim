
@extends('layouts.admin')

@section('content')

<div class="row">
        @include('flash::message')
        @include('layouts.form-errors')
    <div class="col-lg-8 m-auto">

        <div class="card p-3">
            <div class="card-body">
                    <h3 class="card-title">Update Category</h3>
                    <hr>


                    <form action="{{route('categories.update',$category->id)}}" method="post">
                     @csrf
                     @method('PATCH')
                        <div class="form-group row">
                                <label for="name_ar">اسم الفئه</label>
                                <input type="text" name="name_ar" class="form-control" value="{{$category->name_ar}}" required>
                        </div>
                        <div class="form-group row">
                                <label for="name">Category Name:</label>
                                <input type="text" name="name_en" class="form-control" value="{{$category->name_en}}" required>
                        </div>

                        <div class="form-group row">
                           <select name="category_id" class="form-control">
                               <option value="" selected>Select Parent</option>
                              @foreach($categories as $cat)
                                    <option value="{{$cat->id}}" @if(isset($category->category_id)) @if($category->category_id == $cat->id) selected @endif  @endif>{{$cat->name_ar}}</option>
                                    <option value="{{$cat->id}}" @if(isset($category->category_id)) @if($category->category_id == $cat->id) selected @endif  @endif>{{$cat->name_en}}</option>
                               @endforeach
                           </select>
                        </div>

                           <button type="submit" class="btn btn-info">Update Category</button>

                    </form>

                    </div>
                </div>
            </div>
</div>

 @endsection