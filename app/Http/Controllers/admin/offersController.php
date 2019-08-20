<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Offer;
use App\Course;
use App\Notification;
use App\User;
use Illuminate\Http\Request;

class offersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers=Offer::all();
        return view('admin.offers.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses=Course::all();
        return view('admin.offers.create',compact('courses'));
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

            'newprice'       => 'required',
            'course_id'      =>'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'amount'         => 'required',
            'from_date'      => 'required',
            'to_date'        => 'required',

        ]);

        $offer=Offer::create([
            'course_id' => $request->input('course_id'),
            'newprice'  => $request->input('newprice'),
            'description_ar' => $request->input('description_ar'),
            'description_en' => $request->input('description_en'),
            'amount'         => $request->input('amount'),
            'from_date'      => $request->input('from_date'),
            'to_date'        => $request->input('to_date'),
        ]);

        $notification=Notification::create([

            'body_en' => 'new offer is created',
            'body_ar' => 'عرض جديد ',
            'title_en' => 'new offer',
            'title_ar' => 'عرض جديد',
            'offer_id' => $offer->id,

        ]);

        $users=User::where('role_id',2)->get();
        $notification->users()->attach($users);
        flash('Offer Created.......');
        return redirect()->route('offers.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer=Offer::find($id);
        $courses=Course::all();
        return view('admin.offers.edit',compact('offer','courses'));
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
        $offer=Offer::find($id);
        request()->validate([
            'newprice'       => 'required',
            'course_id'      => 'required',
            'amount'         => 'required',
            'description_ar' => 'required',
            'description_en' => 'required'
        ]);

        $offer->update([

            'newprice'  => $request->input('newprice'),
            'course_id' => $request->input('course_id'),
            'amount'         => $request->input('amount'),
            'description_ar' => $request->input('description_ar'),
            'description_en' => $request->input('description_en'),
            'from_date'      => request('from_date') ? $request->input('from_date') : $offer->from_date,
            'to_date'      => request('to_date') ? $request->input('to_date') : $offer->to_date,

        ]);
        flash('Offer Updated.......');
        return redirect()->route('offers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer=Offer::find($id)->delete();
        flash('Offer Deleted.......');
        return back();
    }
}
