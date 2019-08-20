<?php

namespace App\Http\Controllers\front;
use App\User;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index(){
        return view('front.register');
    }

    public function register(Request $request){
       request()->validate([
           'name'       => 'required|min:3',
           'email'      => 'required|email|unique:users',
           'password'    => 'required|min:6|confirmed',
           'phone'      => 'required|min:11'
       ]);

      $user = User::create([

            'name'        => $request->input('name'),
            'email'       => $request->input('email'),
            'password'    => Hash::make($request->input('password')),
            'country_id'  => $request->input('country_id'),
            'phone'       => $request->input('phone'),
            'role_id'     => 2
        ]);

       Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
       return redirect()->route('front.home');
    }
}
