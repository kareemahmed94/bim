<?php

namespace App\Http\Controllers\admin;

use App\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class couponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons=Coupon::all();
        return view('admin.coupons.index',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupons.create');
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
            'code' => 'required',
            'discount' => 'required',
            'discount_type' => 'required',
            'limit_use' => 'required',
            'min_amount' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
        ]);

        $coupon=Coupon::create([
            'code' => $request->input('code'),
            'discount' =>  $request->input('discount'),
            'discount_type' =>  $request->input('discount_type'),
            'limit_use' =>  $request->input('limit_use'),
            'min_amount' =>  $request->input('min_amount'),
            'from_date' =>  $request->input('from_date'),
            'to_date' =>  $request->input('to_date'),
        ]);

        $notifcation=Notification::create([
            'title_ar' => 'تم اضافه كوبون جديد',
            'title_en' => 'new coupon created',
            'body_ar'  => 'تم اضافه كوبون جديد',
            'body_en'  => 'new coupon created',
            'coupon_id' => $coupon->id,
        ]);

        $users = User::where('role_id','!=',1)->get();
        $notifcation->users()->attach($users);

        flash('coupon created');
        return redirect()->route('coupon.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon=Coupon::find($id);
        return view('admin.coupons.edit',compact('coupon'));
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
        request()->validate([
            'code' => 'required',
            'discount' => 'required',
            'discount_type' => 'required',
            'limit_use' => 'required',
            'min_amount' => 'required',
        ]);
        $coupon=Coupon::find($id);
        $coupon->update([
            'code' => $request->input('code'),
            'discount' =>  $request->input('discount'),
            'discount_type' =>  $request->input('discount_type'),
            'limit_use' =>  $request->input('limit_use'),
            'min_amount' =>  $request->input('min_amount'),
            'from_date' => request('from_date') ? $request->input('from_date') : $coupon->from_date ,
            'to_date' => request('to_date') ? $request->input('to_date') : $coupon->to_date ,
        ]);
        flash('coupon Updated');
        return redirect()->route('coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon=Coupon::find($id)->delete();
        flash('coupon Deleted');
        return back();
    }
}
