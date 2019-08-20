<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Country;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins =User::where('role_id',1)->get();
        return view('admin.admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        $countries=Country::all();
        return view('admin.admins.create',compact('roles','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        request()->validate([
            'name'        => 'required|min:4|max:255',
            'email'       => 'required|email|string|unique:users',
            'role_id'     => 'required',
            'password'    => 'required|min:6'
        ]);

         if(auth()->user()->role_id == 1){
            User::create([

                'name'       => $request->input('name'),
                'email'      => $request->input('email'),
                'role_id'    => $request->input('role_id'),
                'password'   => Hash::make($request->input('password'))
    
            ]);
            flash('Admin added.......');
            return redirect()->route('admin.index');
         }else{
            flash('Not Allowed.......');
           return redirect()->back();
         }
     
        
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles=Role::all();
        $admin=User::find($id);
        return view('admin.admins.edit',compact('roles','admin'));
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
        $admin=User::find($id);

        request()->validate([
            'name'        => 'required|min:4',
            'email'       => 'required|string|email',
            'role_id'     => 'required',
        ]);

        $admin->update([

            'name'       => $request->input('name'),
            'email'      => $request->input('email'),
            'role_id'    => $request->input('role_id'),
            'password'   => Hash::make($request->input('password'))

        ]);

        flash('Admin Updated.......');
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin=User::find($id);
        $admin->delete();
        flash('Admin deleted........');
        return redirect()->back();
    }
}
