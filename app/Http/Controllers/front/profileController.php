<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class profileController extends Controller
{
    public function index(){

            return view('front.profile');
    }

    public function update(Request $request,$id){
        request()->validate([
            'name'     => 'required|min:3',
            'email'    => Rule::unique('users')->ignore(auth()->user()->id),
            'phone'    => 'required',
        ]);

        $user=User::find($id);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => $request->input('password') ? $request->input('password') : $user->password,
        ]);

        $request->session()->flash('contact' ,'profile updated');
        return back();
    }
}
