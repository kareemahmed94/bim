<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function show()
    {

        $orders=Order::all();
        return view('admin.orders.show',compact('orders'));

    }

    public function update(Request $request, $id)
    {

        $order=Order::find($id);
        $order->update([

            'status' => $request->input('status'),
        ]);

        return back();
    }
}
