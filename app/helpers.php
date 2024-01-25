<?php

use App\Models\Categories;
use App\Models\Cart;

function category() {
	$category = Categories::get();
	return $category;
}
function cartItem() {
	$cartIteam = Cart::where('user_id', Auth::User()->id)->count();
	return $cartIteam;
}
