<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellerCenter;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class SellerCenterController extends Controller
{
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function seller()
        {
            return view('auth.index');
        }

    // public function seller()
    // {
    //     return view('auth.index');
    // }

        public function dashboard()
        {
            $data['product'] = Product::where("created_by", Auth::id())->count();
            $data['orders'] = Order::where("store_id", Auth::id())->count();
            $data['order_d'] = Order::where("store_id", Auth::id())->where('status', '3')->count();
            $data['sale'] = Order::where("store_id", Auth::id())->sum('total_price');

            if(Auth::check() && Auth::user()->status == '1') {
                return view('seller.authorization', $data);
            } else {
                return view('seller.dashboard');
            }
        }

        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            //
        }

        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
            $seller = new SellerCenter();
            // ID Card Front
            $files = [];
            if($request->hasfile('id_card_front'))
            {
                foreach($request->file('id_card_front') as $file)
                {
                    $name = time().rand(1,100).'.'.$file->extension();
                    $file->move('public/upload/cnic', $name);
                    $files[] = $name;
                }
                    // dd($file);
            }

            // ID Card Back

            $files1 = [];
            if($request->hasfile('id_card_back'))
            {
                foreach($request->file('id_card_back') as $file)
                {
                    $name = time().rand(1,100).'.'.$file->extension();
                    $file->move('public/upload/cnic', $name);
                    $files1[] = $name;
                }
            }

            // Bank Statment

            $files2 = [];
            if($request->hasfile('bank_statement'))
            {
                foreach($request->file('bank_statement') as $file)
                {
                    $name = time().rand(1,100).'.'.$file->extension();
                    $file->move('public/upload/statment', $name);
                    $files2[] = $name;
                }
            }

            $seller->created_by = Auth::id();
            $seller->store_name = $request->input('store_name');
            $seller->slug = Str::slug($request->store_name);
            $seller->email = $request->input('email');
            $seller->phone = $request->input('phone');
            $seller->country = $request->input('country');
            $seller->city = $request->input('city');
            $seller->address = $request->input('address');
            $seller->id_card_front = json_encode($files);
            $seller->id_card_back = json_encode($files1);
            $seller->id_card_name = $request->input('id_card_name');
            $seller->cnic = $request->input('cnic');
            $seller->address1 = $request->input('address1');
            $seller->bank_statement = json_encode($files2);
            $seller->acco_holder_name = $request->input('acco_holder_name');
            $seller->iban_no = $request->input('iban_no');
            $seller->bank_name = $request->input('bank_name');
            $seller->branch_name = $request->input('branch_name');
            // dd($seller);
            $seller->save();
            return Redirect::to('seller-dashboard')->with('status', 'Order Successfully Submitted!');

        }

        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function authorization ()
        {

        }

        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function edit($id)
        {
            //
        }

        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, $id)
        {
            //
        }

        /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
            //
        }
    }
