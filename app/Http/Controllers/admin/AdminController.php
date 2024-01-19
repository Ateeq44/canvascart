<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function orders()
    {
        $data['orders'] = Order::get();
        return view('admin.order.index', $data);
    }
    public function view($id)
    {
        $data['orders'] = Order::with('order_item')->where('id', $id)->first();
        return view('admin.order.view', $data);
    }
    public function update(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->status = $request->input('status');
        // dd($request);
        $orders->update();
        return redirect()->back()->with('status', 'Order Updated Successfully');
    }
}
