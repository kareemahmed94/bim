@extends('layouts.admin')

@section('content')
<div class="row" style="margin-top:100px">
        <div class="col-lg-6 offset-4">

        <div class="timeline-badge info"> </div>
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4 class="timeline-title">{{$blog->title}}</h4>
            </div>
            <div class="timeline-body">
                <p>{{$blog->content}}</p>
                <hr>
                <div class="btn-group">
                        <a href="javascript:void(0)"><span class="ti-heart p-2"></span></a>
                  {{$blog->likes ? $blog->likes->count() : ""}}

                </div>
            </div>
        </div>



        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><span class="lstick"></span>Recent Comments</h4>
            </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="comment-widgets">

                @foreach ($comments as $comment)


                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><span class="round"><img src="{{asset('assets/images/users/1.jpg')}}" alt="user" width="50"></span></div>
                    <div class="comment-text w-100">
                        <h5>James Anderson</h5>
                    <p class="m-b-5">{{$comment->content}}</p>
                    <div class="comment-footer"> <span class="text-muted pull-right">{{$comment->created_at ? $comment->created_at->diffForHumans() : ''}}

                        <form action="{{route('blogcomment.update',$comment->id)}}" method="POST" class="d-inline-block">
                            @csrf
                            @method('PATCH')
                            @if ($comment->status == 0)
                              <input type="submit" name="approve" class="btn btn-success btn-small" value="Approve">
                            @endif

                            @if ($comment->status == 1)
                              <input type="submit" name="unapprove" class="btn btn-danger btn-small" value="Un Approve">
                            @endif

                        </form>

                    <span class="">
                    <a href="javascript:void(0)"><i class="ti-heart p-2"></i>{{$comment->likes ? $comment->likes->count() : '0'}}</a>
                                </span>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

@stop




