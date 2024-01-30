<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Categories;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Stripe;


class CheckoutController extends Controller
{
    public function checkout()
    {
        $data['category'] = Categories::withCount('products')->get();

        $data['cartitem'] = Cart::where('user_id', Auth::id())->get();
        return view('user.checkout', $data);
    }

    public function placeOrder(Request $request)
    {
        $data['category'] = Categories::withCount('products')->get();


        $paymentMethod = $request->input('payment_method');

        $price = $request->input('total_price');;

        

        //To calculate the total price
        $total = 0;
        $cartitem_total = cart::where('user_id', Auth::id())->get();
        foreach ($cartitem_total as $item) {
            $total += $item->products->selling_price * $item->qty;
        }
        $order = new order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->payment_method = $request->input('payment_method');
        $order->country = $request->input('country');
        $order->payment_id = $request->stripeToken;
        $order->zipcode = $request->input('zipcode');
        $order->order_note = $request->input('order_note');
        $order->total_price = $price;
        $order->status = 0;
        $order->tracking_no = '#'.rand(11111111,99999999);
        $order->save();

        $cartitem = cart::where('user_id', Auth::id())->get();
        // dd($cartitem);
        foreach ($cartitem as $item) {
            orderitem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'price' => $item->products->selling_price,
                'qty' => $item->prod_qty,
                'color' => $item->color,
                'size' => $item->size,
            ]);
        }
        
        if ($paymentMethod !== 'cod') {
            $price = $request->input('total_price');
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer = \Stripe\Customer::create([
                'email' => Auth::user()->email,
                'source' => $request->stripeToken,
            ]);


            $data = Stripe\Charge::create([
                "amount" => 100 * $price,
                "currency" => "usd",
                "customer" => $customer->id,
                "description" => "Payment from ".Auth::user()->name,
            ]);
            $order->payment_id = $customer->id;
        } 

        $order->save();
        cart::destroy($cartitem);

        return Redirect::to('invoice/'.$order->id)->with('status', 'Order Successfully Submitted!');
    }

    public function invoice($orderId)
    {
        $data['category'] = Categories::withCount('products')->get();
        
        $data['order'] = Order::with('order_item')->find($orderId);
        return view('user.invoice', $data);
    }
}
