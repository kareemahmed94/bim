<?php

namespace App\Http\Controllers\front;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class blogController extends Controller
{
    public function index(){
        $blog=Blog::inRandomOrder()->first();;
        $blogs=Blog::all();
        return view('front.blog',compact('blogs','blog'));
    }

    public function show($id){
        $blog=Blog::find($id);
        return view('front.blog_details',compact('blog'));
    }
}
