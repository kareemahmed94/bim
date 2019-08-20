<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class loginController extends Controller
{
    public function index(){

        return view('admin.adminlogin');

    }


    public function adminLogin(request $request){


        $user=User::where('email',request('email'))->first();

        //return $user;

        if(isset($user)){

            if(Hash::check($request->input('password'), $user->password)){

                if (Auth::attempt(request(['email' , 'password'],1))) {
                    
                    return redirect()->route('admin.home');

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
        return redirect()->route('admin.login');
   }

}
