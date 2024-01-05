<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {
        $data = [];
        $categoriesWithCount = Categories::withCount('products')->get();
        $data['is_feature'] = Product::where('is_feature', '1')->where('status', '1')->where('admin_approval', '1')->get();
        $data['recentProducts'] = Product::latest('created_at')->take(3)->where('status', '1')->where('admin_approval', '1')->get();
        return view('home', $data , ['categoriesWithCount' => $categoriesWithCount]);
    }

    public function product_details($cslug, $slug, $cat_id)
    {
        $data['product_details'] = Product::where('slug', $cslug)->orWhere('slug', $slug)->first();
        $data['related_product'] = Product::where('cat_id', $cat_id)->get();
        $data['is_feature'] = Product::where('is_feature', '1')->where('status', '1')->where('admin_approval', '1')->take(3)->get();
        $data['recentProducts'] = Product::latest('created_at')->take(3)->where('status', '1')->where('admin_approval', '1')->get();
        return view('user.product-details', $data);
    }
}
