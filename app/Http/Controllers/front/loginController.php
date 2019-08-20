<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
//    public function index(){
//        return view('front.login');
//    }


    public function userLogin(request $request){

        $user=User::where('email',request('email'))->first();

        //return $user;

        if(isset($user)){

            if(Hash::check($request->input('password'), $user->password)){

                if (Auth::attempt(request(['email' , 'password'],1))) {

                    return redirect()->route('front.profile');

                }else{

                    flash()->warning('Something Went Wrong!');
                    return back();
                }
            }

            flash()->warning('Wrong Password!');
            return back();

        }
        flash()->warning('Wrong Mail');
        return back();
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('front.home');
    }
}


