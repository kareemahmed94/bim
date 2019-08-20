<?php

namespace App\Http\Controllers;
use App\Http\Resources\CourseCollection;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Video;
use App\order;

class userCoursesApiController extends Controller
{
    public function index(Request $request){
        $user= User::find($request->input('user_id'));
        $courses_id = Order::where('user_id' , $user->id)->where('status',1)->pluck('course_id')->toArray();
        $courses = Course::whereIn('id' , $courses_id)->paginate(10);
        return response()->json(['status' => 200 ,'courses' => $courses]);
    }
}
