<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;



class CartController extends Controller
{
    public function cart()
    {

        // $wishlist = wishlist::where('user_id', Auth::id())->get();
        $data['cartitem'] = Cart::where('user_id', Auth::id())->get();
        return view('user.cart',$data);
    }

    public function addproduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        $color = $request->input('color');
        $size = $request->input('size');

        $prod_check = Product::where('id', $product_id)->first();
        if ($prod_check) {

            if (Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists()) {
                return response()->json(['status' => $prod_check->name.' Already Added To Cart']);
                $destroy = Wishlist::where('prod_id', $product_id)->first();
                $destroy->destroy();
            }
            else{
                $cartItem = new Cart();
                $cartItem->prod_id = $product_id;
                $cartItem->user_id = Auth::id();
                $cartItem->prod_qty = $product_qty;
                $cartItem->color = $color;
                $cartItem->size = $size;
                $cartItem->save();
                $destroy = Wishlist::where('prod_id', $product_id)->first();
                $destroy->delete();
                return response()->json(['status' => $prod_check->name.' Added To Cart']);
            }
        }
    }
}
