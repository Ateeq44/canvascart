<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Str;
use Redirect;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Categories::get();
        $data['sub_category'] = SubCategories::get();
        $data['brand'] = Brand::get();
        return view('seller.products.add-product', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new product();
        $files = [];
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move('public/upload/product', $name);
                $files[] = $name;
            }
        }
        
        $product->created_by = Auth::id();
        $product->product_name = $request->input('product_name');
        $product->slug = Str::slug($request->product_name);
        $product->cat_id = $request->input('cat_id');
        $product->subcat_id = $request->input('subcat_id');
        $product->brand = $request->input('brand');
        $product->g_memory = $request->input('g_memory');
        $product->barcode = $request->input('barcode');
        $product->model = $request->input('model');
        $product->num_cpus = $request->input('num_cpus');
        $product->ci_cable_length = $request->input('ci_cable_length');
        $product->system_memory = $request->input('system_memory');
        $product->hard_disk = $request->input('hard_disk');
        $product->cpu_speed = $request->input('cpu_speed');
        $product->soft_offering = $request->input('soft_offering');
        $product->touch_pad = $request->input('touch_pad');
        $product->processor_type = $request->input('processor_type');
        $product->operating_system = $request->input('operating_system');
        $product->dis_size = $request->input('dis_size');
        $product->g_card = $request->input('g_card');
        $product->battery_life = $request->input('battery_life');
        $product->processpr = $request->input('processpr');
        $product->wireless_type = $request->input('wireless_type');
        $product->ac_adapter = $request->input('ac_adapter');
        $product->protection = $request->input('protection');
        $product->model_year = $request->input('model_year');
        $product->no_camera = $request->input('no_camera');
        $product->battert_capacity = $request->input('battert_capacity');
        $product->camera_pixel = $request->input('camera_pixel');
        $product->sim_type = $request->input('sim_type');
        $product->cam_front_pixel = $request->input('cam_front_pixel');
        $product->ram = $request->input('ram');
        $product->body_type = $request->input('body_type');
        $product->e_warranty = $request->input('e_warranty');
        $product->camra_back = $request->input('camra_back');
        $product->number_of_cores = $request->input('number_of_cores');
        $product->screen_type = $request->input('screen_type');
        $product->sim_slot = $request->input('sim_slot');
        $product->resolution = $request->input('resolution');
        $product->quantity = $request->input('quantity');
        $product->seller_sku = $request->input('seller_sku');
        $product->warranty_policy = $request->input('warranty_policy');
        $product->warranty_period = $request->input('warranty_period');
        $product->wranty_type = $request->input('wranty_type');
        $product->pkg_Weight = $request->input('pkg_Weight');
        $product->length = $request->input('length');
        $product->width = $request->input('width');
        $product->height = $request->input('height');
        $product->dang_goods =  json_encode($request->input('dang_goods'));
        $product->mobile_feature = json_encode($request->input('mobile_feature'));
        $product->network_conn = json_encode($request->input('network_conn'));
        $product->short_description = $request->input('short_description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
        $product->special_price = $request->input('special_price');
        $product->discount_start_date = $request->input('discount_start_date');
        $product->discount_end_date = $request->input('discount_end_date');
        $product->is_feature = $request->input('is_feature')== TRUE ? '1':'0';
        $product->status = $request->input('status')== TRUE ? '1':'0';
        $product->color = json_encode($request->input('color'));
        $product->size = json_encode($request->input('size'));
        $product->images = json_encode($files);
        $product->admin_approval = '0';
        // dd($product);
        $product->save();
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
