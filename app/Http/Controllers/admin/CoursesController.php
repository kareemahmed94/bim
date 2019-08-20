<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Course;
use App\Instructor;
use App\Photo;
use App\Notification;
use App\User;
use App\Video;
use App\Category;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $instructors = Instructor::all();
        return view('admin.courses.create', compact('categories', 'instructors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
            'instructor_id' => 'required',
            'details_ar' => 'required',
            'details_en' => 'required',
            'price' => 'required',
            'hours' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
        ]);

        if ($file = $request->file('photo_id')) {
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['name' => $name, 'path' => 'images/' . $name]);
            $photo_id = $photo->id;
        } else {
            $photo_id = null;
        }

        $course = Course::create([
            'name_ar' => $request->input('name_ar'),
            'name_en' => $request->input('name_en'),
            'details_ar' => $request->input('details_ar'),
            'details_en' => $request->input('details_en'),
            'instructor_id' => $request->input('instructor_id'),
            'price' => $request->input('price'),
            'hours' => $request->input('hours'),
            'photo_id' => $photo_id,
            'category_id' => $request->input('category_id'),
            'is_free' => $request->input('is_free'),
            'from_date' => $request->input('from_date'),
            'to_date' => $request->input('to_date'),

        ]);


        if ($request->input('videos_number')) {
            $n = $request->input('videos_number');
            for ($i = 0; $i < $n; $i++) {
                $video = Video::create([
                    'name_ar' => $request->input('video_name_ar')[$i],
                    'name_en' => $request->input('video_name_en')[$i],
                    'path' => public_path() . '/uploads/' . $request->input('video_name_en')[$i],
                    'description_ar' => $request->input('video_description_ar')[$i],
                    'description_en' => $request->input('video_description_en')[$i],
                    'course_id' => $course->id,
                ]);

            }
        }

        $notifcation = Notification::create([
            'title_en' => 'New Course',
            'title_ar' => 'كورس جديد',
            'body_en' => 'New Course has been added',
            'body_ar' => 'تم اضافه كورس جديد',
            'course_id' => $course->id
        ]);

        $users = User::where('role_id','!=',1)->get();
        $notifcation->users()->attach($users);

        flash('Course Added........');
        return redirect()->route('course.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=Course::find($id);
        return view('admin.courses.edit',compact('course'));
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
        $course=Course::find($id);
        request()->validate([
            'name_ar'          => 'required|max:255',
            'name_en'          => 'required|max:255',
            'instructor_id'    => 'required',
            'details_ar'       => 'required',
            'details_en'       => 'required',
            'price'            => 'required',
            'hours'            => 'required',
          ]);


        $instructor=Instructor::where('name',request('instructor_id'))->first();
        $instructor_id=$instructor->id;

        if($file=$request->file('photo_id')){
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['name' => $name,'path' => 'images/'.$name]);
            $photo_id=$photo->id;
          }else{
              $photo_id=null;
          }

        $course->update([

              'name_ar'         =>$request->input('name_ar'),
              'name_en'         =>$request->input('name_en'),
              'details_ar'      => $request->input('details_ar'),
              'details_en'      => $request->input('details_en'),
              'instructor_id'=> $instructor_id,
              'price'        => $request->input('price'),
              'hours'        => $request->input('hours'),
              'from_date'    => request('from_date') ? $request->input('from_date') : $course->from_date,
              'to_date'    => request('to_date') ? $request->input('to_date') : $course->to_date,
              'photo_id'     => $photo_id,

        ]);
        flash('Course updated........');
        return redirect()->route('course.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::find($id);
        $comment_ids=$course->comments()->pluck('id')->toArray();
        $likes=Like::whereIn('comment_id',$comment_ids)->delete();
        $course->comments()->delete();
        $course->likes()->delete();
        $course->offers()->delete();
        $course->videos()->delete();
        $course->delete();
        flash('Course deleted........');
        return back();
    }

    public function addVideosToCourse()
    {
          $videos=Video::all();
          $courses=Course::all();
          return view('admin.courses.addVideo',compact('videos','courses'));
    }


}

