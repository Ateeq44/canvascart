<?php

use App\Models\Categories;
use App\Models\Cart;
use App\Models\Wishlist;

function category() {
	$category = Categories::get();
	return $category;
}
function cartItem() {
	$cartIteam = Cart::where('user_id', Auth::User()->id)->count();
	return $cartIteam;
}
function wishlist() {
	$wishlist = Wishlist::where('user_id', Auth::User()->id)->count();
	return $wishlist;
}
