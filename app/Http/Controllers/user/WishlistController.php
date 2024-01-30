<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class wishlistcontroller extends Controller
{
    public function index()
    {
        $cartitem = Cart::where('user_id', Auth::id())->get();
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('user.wishlist', compact('wishlist', 'cartitem'));
    }
    public function add(Request $request)
    {

        if(Auth::check()){
            $prod_id = $request->input('prod_id');
            $color = $request->input('color');
            $size = $request->input('size');
            if (Product::find($prod_id)) {
                $wishlist = new Wishlist;
                $wishlist->prod_id = $prod_id;
                $wishlist->user_id = Auth::id();
                $wishlist->color = $color;
                $wishlist->size = $size;
                $wishlist->save();
                
                return response()->json(['status' => 'Added To Wishlist']);


            } else {
                return response()->json(['status' => 'Product Does not Exist']);
            }
        }
    }

    public function delete(Request $request, $id)
    {
        wishlist::destroy(array('id', $id));
        return redirect ('wishlist')->with('status', 'Wishlist Item Deleted Successfully');
    }
}
