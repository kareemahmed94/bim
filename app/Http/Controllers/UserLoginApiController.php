<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class UserLoginApiController extends Controller
{


public function userLogin(request $request){


     $user=user::where('email',request('email'))->first();

     if(isset($user)){

        if(Hash::check($user->password, request('password'))){
            return response()->json(['status' => 200,'message'=>'logged in successfully' , 'user' => $user]);
        }
        
        return response()->json(['status' => 500,'message'=>'Password Wrong']);
     }

     return response()->json(['status' => 500,'message'=>'wrong email']);


    }




public function register(Request $request){

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed',
    ]);

    if ($validator->fails()) {
        return response()->json(['status' => 500,  'message' => $validator->messages()]);
    }

    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'api_token' => Str::random(60),
    ]);

    return response()->json(['status' => 200,  'message' => 'registeration success']);
}

}
