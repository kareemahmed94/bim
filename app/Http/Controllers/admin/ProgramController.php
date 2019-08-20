<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Programe;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs= Programe::all();
        return view('admin.programs.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programs.create');
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
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);

        Programe::create([
            'name_ar' => $request->input('name_ar'),
            'name_en' => $request->input('name_en'),
        ]);
        flash('programe created....');
        return redirect()->route('programe.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programe=Programe::find($id);
        return view('admin.programs.edit',compact('programe'));
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
        request()->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);
        $programe=Programe::find($id);

        $programe->update([
            'name_ar' => $request->input('name_ar'),
            'name_en' => $request->input('name_en'),
        ]);

        flash('programe updated....');
        return redirect()->route('programe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programe=Programe::find($id)->delete();
        flash('programe deleted....');
        return back();
    }
}
