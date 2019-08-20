<?php

namespace App\Http\Controllers\front;

use App\Course;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class myordersController extends Controller
{
    public function index(){

            $mycourses_ids=Order::where([
                ['user_id',auth()->user()->id],['status','!=',1]
            ])->orderBy('created_at', 'asc')->pluck('course_id')->toArray();
            $mycourses=Course::whereIn('id',$mycourses_ids)->get();
            return view('front.myorders',compact('mycourses'));

    }

    public function show($id){

        $course=Course::find($id);
        $order=Order::where('course_id',$id)->first();
        return view('front.order_details',compact('order','course'));

    }

}
