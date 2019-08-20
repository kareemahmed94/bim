<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Country;
use App\Comment;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =User::where('role_id',2)->get();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=Country::all();
        return view('admin.users.create',compact('countries'));
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
            'name'        => 'required|min:4|max:255',
            'email'       => 'required|email|string|unique:users',
            'country_id'  => 'required',
            'password'    => 'required|min:6',
            'phone'       => 'required|min:11',
        ]);

        User::create([

            'name'       => $request->input('name'),
            'email'      => $request->input('email'),
            'country_id' => $request->input('country_id'),
            'password'   => Hash::make($request->input('password')),
            'block'      => $request->input('block'),
            'phone'      => $request->input('phone'),
            'role_id'     => 2

        ]);
        flash('User Created....');
        return redirect()->route('user.index');
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries=Country::all();
        $user=User::find($id);
        return view('admin.users.edit',compact('countries','user'));
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
        $user=User::find($id);

        request()->validate([
            'name'        => 'required|min:4',
            'email'       => 'required|string|email',
            'country_id'  => 'required',
            'phone'       => 'required|min:11',
        ]);

        $user->update([

            'name'       => $request->input('name'),
            'email'      => $request->input('email'),
            'country_id' => $request->input('country_id'),
            'block'      => $request->input('block'),
            'phone'      => $request->input('phone'),
        ]);
        flash('User Updated.....');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $comments=Comment::where('user_id',$user->id)->delete();
        $orders=Order::where('user_id',$user->id)->delete();
        $user->notifications()->detach();
        $user->delete();
        flash('User Deleted....');
        return redirect()->back();
    }
}
