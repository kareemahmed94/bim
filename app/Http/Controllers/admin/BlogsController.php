<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Like;
use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\Photo;
use App\Role;
use App\Notification;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role=Role::where('name','author')->first();
        $authors=User::where('role_id',$role->id)->get();
        return view('admin.blogs.create',compact('authors'));
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

         'title_ar'     => 'required|max:255',
         'title_en'     => 'required|max:255',
         'content_ar'   => 'required|min:5',
         'content_en'   => 'required|min:5',
         'author_id'    => 'required',

       ]);

       if($file=$request->file('photo_id')){

         $name=$file->getClientOriginalName();
         $file->move('images',$name);
         $photo=Photo::create(['name' => $name,'path' => 'images/'.$name]);
         $photo_id=$photo->id;

       }



       $blog=Blog::create([

             'title_ar'     => $request->input('title_ar'),
             'title_en'     => $request->input('title_en'),
             'content_ar'   => $request->input('content_ar'),
             'content_en'   => $request->input('content_en'),
             'author_id'    => $request->input('author_id'),
             'photo_id'     => $photo_id,

       ]);

       $notifcation = Notification::create([
        'title_en'=> 'New Blog',
        'title_ar'=> 'مدونه جديده',
        'body_en'=> 'New Blog has been added',
        'body_ar'=> 'تم اضافه مدونه جديده',
        'blog_id' => $blog->id
       ]);

    $users = User::where('role_id','!=',1)->get();
    $notifcation->users()->attach($users);

       flash('Blog Added........');
       return redirect()->route('blog.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        $role=Role::where('name','author')->first();
        $authors=User::where('role_id',$role->id)->get();
        return view('admin.blogs.edit',compact('blog','authors'));
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

        $blog=Blog::find($id);
        request()->validate([

            'title_ar'     => 'required|max:255',
            'title_en'     => 'required|max:255',
            'content_ar'   => 'required|min:5',
            'content_en'   => 'required|min:5',
            'author_id'   => 'required',

          ]);

          if($file=$request->file('photo_id')){

            $name=$file->getClientOriginalName();
            $file->move('images',$name);

            $photo=Photo::create(['name' => $name]);
            $blog->photo_id=$photo->id;
            $blog->update();
          }



          $blog->update([

                'title_ar'     => $request->input('title_ar'),
                'title_en'     => $request->input('title_en'),
                'content_ar'   => $request->input('content_ar'),
                'content_en'   => $request->input('content_en'),
                'author_id'    => $request->input('author_id'),

          ]);
          flash('Blog Updated........');
          return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);
        $comment_ids=$blog->comments()->pluck('id')->toArray();
        $likes=Like::whereIn('comment_id',$comment_ids)->delete();
        $blog->comments()->delete();
        $blog->likes()->delete();
        $blog->delete();
        flash('Blog deleted........');
        return redirect()->back();
    }
}




