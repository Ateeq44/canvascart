<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['wishlist'] = Wishlist::where('user_id', Auth::id())->get();
        $data['cartitem'] = Cart::where('user_id', Auth::id())->get();
        $data['order'] = Order::with('order_item')->orderBy('created_at', 'DESC')->where('user_id', Auth::id())->get();

        return view('user.dashboard.index', $data);
    }
    public function order_details($Id)
    {
        $data['order'] = Order::with('order_item')->where('id', $Id)->first();
        return view('user.dashboard.order_details', $data);
    }
}
