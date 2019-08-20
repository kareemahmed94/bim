<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class BlogCommentsController extends Controller
{
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=Blog::find($id);
        $comments=$blog->comments;
        return view('admin.blogcomments.show',compact('comments','blog'));
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment=Comment::find($id);
        if($request->input('approve')){
         $comment->update(['status' => 1 ]);
        }

        if( $request->input('unapprove')){
            $comment->update(['status' => 0 ]);
        }

        return back();

    }

 
}
