<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$notifications=Notification::all();
        $users=User::where('role_id',1)->with('notifications')->get();
        return view('admin.notifications.index',compact('users'));
    }

  
   


}
