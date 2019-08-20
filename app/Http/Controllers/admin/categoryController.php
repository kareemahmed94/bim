<?php

namespace App\Http\Controllers\admin;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index',compact('categories'));
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
            'name_ar' => 'required|min:3',
            'name_en' => 'required|min:3',
        ]);

        Category::create([
            'name_ar'        => $request->input('name_ar'),
            'name_en'        => $request->input('name_en'),
            'category_id' => $request->input('category_id'),
        ]);
        flash('Category Created.......');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        $categories=Category::where('id' , '!=' , $category->id)->get();
        return view('admin.categories.edit',compact('category','categories'));
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
            'name_ar' => 'required|min:3',
            'name_en' => 'required|min:3',
        ]);
        $category=Category::find($id);
        $category->update([
            'name_ar'        => $request->input('name_ar'),
            'name_en'        => $request->input('name_en'),
            'category_id'    => $request->input('category_id'),
        ]);
        flash('Category Updated.......');

        return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        flash('Category Deleted.......');
        return back();
    }
}
