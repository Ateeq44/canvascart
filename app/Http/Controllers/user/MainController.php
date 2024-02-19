<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Details;

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
        return view('user.category', $data);
    }

    public function products_category($cat_id)
    {        
        $data['category'] = Categories::withCount('products')->get();
        $data['shop'] = Product::where('status', '1')->where('cat_id', $cat_id)->paginate(10);
        return view('user.products_category', $data);
    }
    
    public function shop(Request $request)
    {
        $data['category'] = Categories::withCount('products')->get();
        $data['shop'] = Product::where('status', '1')->paginate(10);
        $data['shop1'] = Product::where('status', '1')->get();
        $data['details'] = Details::get();        
        
        if ($request->isMethod('post')) {
            $selectedCategories = $request->category;
            $selectedColors = $request->color;
            $selectedSize = $request->size;
            $priceRange = $request->priceRange;
            $minPrice = $request->minPrice;
            $maxPrice = $request->maxPrice;
            // dd($request->maxPrice);
            $query = Product::with('category')->where('status', '1');

            if (!empty($selectedCategories)) {
                $query->whereIn('cat_id', $selectedCategories);
            }

            if (!empty($selectedColors)) {
                $query->where(function ($query) use($selectedColors) {
                    foreach ($selectedColors as $key => $color) {
                        if ($key == 0) {
                            $query->where('color', 'like', '%'.$color.'%');
                        }
                        else{
                            $query->orWhere('color', 'like', '%'.$color.'%');

                        }
                    }
                });
            }

            if (!empty($selectedSize)) {
                $query->where(function ($query) use($selectedSize) {
                    foreach ($selectedSize as $key => $size) {
                        if ($key == 0) {
                            $query->where('size', 'like', '%'.$size.'%');
                        }
                        else{
                            $query->orWhere('size', 'like', '%'.$size.'%');

                        }
                    }
                });
            }

            // Price range filter
            if (!empty($minPrice) && is_numeric($minPrice)) {
                $query->where('selling_price', '>=', $minPrice);
            }

            if (!empty($maxPrice) && is_numeric($maxPrice)) {
                $query->where('selling_price', '<=', $maxPrice);
            }

            $data['shop'] = $query->get();

            return json_encode(['flag' => true, 'data' => $data]);
        }

        // dd($request);
        return view('user.shop', $data);
    }
    public function search(Request $request)
    {
        $data['category'] = Categories::withCount('products')->get();
        $data['details'] = Details::get();
        $data['search'] = Product::where('product_name', 'LIKE', "%{$request->search}%")->where('status', '1')->paginate(10);
        return view('user.search',$data);
    }
}
