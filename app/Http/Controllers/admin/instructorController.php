<?php

namespace App\Http\Controllers\admin;

use App\Instructor;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class instructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors=Instructor::all();
        return view('admin.instructors.index',compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name'  => 'required',
            'email' => 'required',
        ]);

        if($file=$request->file('photo_id')){
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['name'=>$name,'path' => 'images/'.$name]);
        }

        Instructor::create([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'photo_id' => isset($photo) ? $photo->id : null,
        ]);
        flash('Instructor Created');
        return redirect()->route('instructor.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructor=Instructor::find($id);
        return view('admin.instructors.edit',compact('instructor'));
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
        $instructor=Instructor::find($id);
        request()->validate([
            'name'  => 'required',
            'email' => 'required',
        ]);

        if($file=$request->file('photo_id')){
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['name'=>$name,'path' => 'images/'.$name]);
        }

        $instructor->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'photo_id' => isset($photo) ? $photo->id : $instructor->photo_id ,
        ]);
        flash('Instructor Updated');
        return redirect()->route('instructor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor=Instructor::find($id)->delete();
        flash('Instructor Deleted');
        return back();
    }
}
