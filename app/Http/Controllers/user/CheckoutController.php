<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Stripe;


class CheckoutController extends Controller
{
    public function checkout()
    {
        $data['cartitem'] = Cart::where('user_id', Auth::id())->get();
        return view('user.checkout', $data);
    }

    public function placeOrder(Request $request)
    {

        $paymentMethod = $request->input('payment_method');

        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->payment_method = $paymentMethod;
        $order->country = $request->input('country');
        $order->payment_id = $request->stripeToken;
        $order->zipcode = $request->input('zipcode');
        $order->order_note = $request->input('order_note');
        $order->total_price = $request->input('total_price');
        $order->status = 0;
        $order->tracking_no = '#'.rand(11111111,99999999);

            // dd($order->id);
        $cartitem = Cart::where('user_id', Auth::id())->get();
        foreach ($cartitem as $item) {
           OrderItem::create([
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
        // cart::destroy($cartitem);

        return redirect()->back();
    }
}
