<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;
use App\Models\Categories;



class CartController extends Controller
{
    public function cart()
    {
        // $data['category'] = Categories::withCount('products')->get();


        // $wishlist = wishlist::where('user_id', Auth::id())->get();
        $data['cartitem'] = Cart::where('user_id', Auth::id())->get();
        return view('user.cart',$data);
    }

    public function addproduct(Request $request)
    {
        $data['category'] = Categories::withCount('products')->get();

        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        $color = $request->input('color');
        $size = $request->input('size');

        $prod_check = Product::where('id', $product_id)->first();
        if ($prod_check) {

            if (Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists()) {
                return response()->json(['status' => $prod_check->product_name.' Already Added To Cart']);
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
                
                return response()->json(['status' => $prod_check->product_name.' Added To Cart']);
            }
        }
    }

    public function delete($id)
    {
        $data['category'] = Categories::withCount('products')->get();

        Cart::destroy(array('id', $id));
        return redirect ('cart')->with('status', 'Cart Item Deleted Successfully');
    }

    public function increase(Request $request, $id)
    {
        $data['category'] = Categories::withCount('products')->get();

        $res = Cart::where('id', $id)->where('user_id', Auth::id())->first();
        Cart::where('id', $id)->where('user_id', Auth::id())->update(['prod_qty' => $res->prod_qty - 1]);
        return redirect('cart');

    }
    public function decrease(Request $request, $id)
    {
        $data['category'] = Categories::withCount('products')->get();
        
        $res = Cart::where('id', $id)->where('user_id', Auth::id())->first();
        // dd($res);
        Cart::where('id', $id)->where('user_id', Auth::id())->update(['prod_qty' => $res->prod_qty + 1]);
        return redirect('cart');
    }
    public function product($id)
    {
        $data['category'] = Categories::withCount('products')->get();
        
        $res = Cart::where('id', $id)->where('user_id', Auth::id())->first();
        // dd($res);
        Cart::where('id', $id)->where('user_id', Auth::id())->update(['prod_qty' => $res->prod_qty + 1]);
        return redirect('cart');
    }
}
