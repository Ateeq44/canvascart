<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function seller()
    {
        return view('auth.index');
    }

    public function dashboard()
    {
        return view('seller.dashboard');
    }
}
