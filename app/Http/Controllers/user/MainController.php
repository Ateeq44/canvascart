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
        $data['category'] = Categories::withCount('products')->get();
        
        $data['is_feature'] = Product::where('is_feature', '1')->where('status', '1')->where('admin_approval', '1')->get();

        $data['recentProducts'] = Product::latest('created_at')->take(3)->where('status', '1')->where('admin_approval', '1')->get();
        return view('home', $data);
    }

    public function product_details($cslug, $slug, $cat_id)
    {
        $data['category'] = Categories::withCount('products')->get();

        $data['product_details'] = Product::where('slug', $cslug)->orWhere('slug', $slug)->first();
        $data['related_product'] = Product::where('cat_id', $cat_id)->where('slug', '!=', $slug)->get();
        $data['is_feature'] = Product::where('is_feature', '1')->where('status', '1')->where('admin_approval', '1')->take(3)->get();
        $data['recentProducts'] = Product::latest('created_at')->take(3)->where('status', '1')->where('admin_approval', '1')->get();
        return view('user.product-details', $data);
    }

    public function category()
    {
        $data['category'] = Categories::withCount('products')->get();
        
        $data['category'] = Categories::withCount('products')->get();
        return view('user.category', $data);
    }
    public function shop()
    {
        $data['category'] = Categories::withCount('products')->get();
        $data['shop'] = Product::where('status', '1')->paginate(10);
        return view('user.shop', $data);
    }
    public function search(Request $request)
    {
        $data['category'] = Categories::withCount('products')->get();

        $data['search'] = Product::where('product_name', 'LIKE', "%{$request->search}%")->where('status', '1')->paginate(10);
        return view('user.search',$data);
    }
}
