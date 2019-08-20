<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::all();
        return view('admin.contacts.index',compact('contacts'));
    }
}
