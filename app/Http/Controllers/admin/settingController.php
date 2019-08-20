<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Setting;

class settingController extends Controller
{
    public function index()
    {
        $setting=Setting::all();
        return view('admin.settings.index',compact('setting'));
    }

    public function edit($id)
    {
        $setting=Setting::find($id);
        return view('admin.settings.edit',compact('setting'));
    }

    public function update(Request $request,$id)
    {
        request()->validate([
            'title'         => 'required|max:255',
            'facebook_link' => 'required',
            'twitter_link'  => 'required',
            'limkedin_link' => 'required',
            'youtube_link'  => 'required',
            'download_link' => 'required',


        ]);
        $setting=Setting::find($id);

        if($file=$request->file('logo')){
            $name=$file->getClientOriginalName();
            $file->move('images',$name);

        }

        $setting->update([

            'title'         => $request->input('title'),
            'logo'          => isset($name) ? $name : $setting->logo,
            'facebook_link' => $request->input('facebook_link'),
            'twitter_link'  => $request->input('twitter_link'),
            'limkedin_link' => $request->input('limkedin_link'),
            'youtube_link'  => $request->input('youtube_link'),
            'download_link' => $request->input('download_link'),

        ]);

        flash('Setting Updated....');

        return redirect()->route('settings.index');
    }
}
