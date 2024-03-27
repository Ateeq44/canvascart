<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Contact;
use App\Models\SellerCenter;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $data['product'] = Product::count();
        $data['orders'] = Order::count();
        $data['order_d'] = Order::where('status', '3')->count();
        $data['sale'] = Order::sum('total_price');
        return view('admin.dashboard', $data);
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

    public function contact()
    {
        $data['contact'] = Contact::get();
        return view('admin.contact', $data);
    }
    public function seller_info()
    {
        $data['seller_info'] = SellerCenter::get();
        return view('admin.seller-info.index', $data);
    }
    public function seller_info_view($id)
    {
        $data['seller_info_view'] = SellerCenter::where('id', $id)->first();
        return view('admin.seller-info.view', $data);
    }
    public function seller_info_update(Request $request, $id)
    {
        $seller = User::find($id);
        $seller->status = $request->input('status');
        $seller->update();
        return redirect()->back()->with('status', 'Seller Info Updated Successfully');
    }
}
