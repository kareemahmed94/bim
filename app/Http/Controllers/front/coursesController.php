<?php

namespace App\Http\Controllers\front;

use App\Category;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class coursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        return view('front.courses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course=Course::find($id);
        return view('front.course_details',compact('course'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCourses(Request $request)
    {
        //return $request->all();
        $category=Category::where('name_en','like','%'.$request->input('name_en').'%')->first();
        $courses=Course::where('category_id',$category->id)->get();
        return view('front.courses_search',compact('courses'));
    }

  public function makeOrder(){
        if( Auth::check() ){
            Order::create([
                //
            ]);
        }
  }
}
