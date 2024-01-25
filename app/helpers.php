<?php

use App\Models\Categories;

function category() {
	$category = Categories::get();
	return $category;
}

