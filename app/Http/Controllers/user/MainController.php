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
        $data['category'] = Categories::where('top', "1")->get();
        $data['is_feature'] = Product::where('is_feature', '1')->where('status', '1')->where('admin_approval', '1')->get();
        return view('home', $data);
    }
}
