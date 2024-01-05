<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Details;
// use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private $type   =  "products";
    private $singular = "Product";
    private $plural = "Products";
    private $view = "admin.product.";
    private $db_key   =  "id";
    private $action   =  "product";
    private $perpage   =  10;
    private $directory  =   '\public\images/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function search($records,$request,&$data) {

        /*
        SET DEFAULT VALUES
        */
        if($request->perpage)
            $this->perpage  =   $request->perpage;
        $data['sindex']     = ($request->page != NULL)?($this->perpage*$request->page - $this->perpage+1):1;

        /*
        FILTER THE DATA
        */
        $params = [];
        if($request->cons_id) {
            $params['cons_id'] = $request->cons_id;
            $records = $records->where("cons_id",$params['cons_id']);
        }
        if($request->is_active) {
            $params['is_active'] = $request->is_active;
            $records = $records->where("is_active",$params['is_active']);
        }

        $data['request'] = $params;
        return $records;    
    }
    public function index(Request $request)
    {
        $data   = array();
        $data   = array(
            "page_title"=>$this->plural." List",
            "page_heading"=>$this->plural.' List',
            "breadcrumbs"=>array("#"=>$this->plural." List"),
            "action"=> url('admin/'.$this->action),
            "module"=>['type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>'admin/'.$this->action,'db_key'=>$this->db_key]
        );
        /*
        GET RECORDS
        */
        $records   = new Product;
        $records = $records::with('category');
        $records   = $this->search($records,$request,$data);
        /*
        GET TOTAL RECORD BEFORE BEFORE PAGINATE
        */

        $data['count']  = $records->count();

        /*
        PAGINATE THE RECORDS
        */
        $records = $records->paginate($this->perpage);
        $records->appends($request->all())->links();
        $links = $records->links();
        $records = $records->toArray();
                    // print_r($records); die;

        $records['pagination'] = $links;

        /*
        ASSIGN DATA FOR VIEW
        */
        $data['Course']   =   $records;
        $data['list'] = Categories::get()->toArray();

        /*
        DEFAUTL VALUES
        */        
        // dd($data['Course']['data']);
        // echo "<pre>"; print_r($data['list']); die();
        

        return view($this->view.'list',$data);
    }
    public function cleanData(&$data) {
        $unset = ['q','_token'];
        foreach ($unset as $value) {
            if(array_key_exists ($value,$data))  {
                unset($data[$value]);
            }
        }
        $int = ['Price'];
        foreach ($int as $value) {
            if(array_key_exists ($value,$data))  {
                $data[$value] = (int)str_replace(['(','Rs',')',' ','-','_',','], '', $data[$value]);
            }

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            
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
		        $product->product_name = $request->input('product_name');
		        $product->slug = $request->input('slug');
        		$product->cat_id = $request->input('cat_id');
		        $product->short_detail = $request->input('short_detail');
		        $product->long_detail = $request->input('long_detail');
		        $product->admin_approval = $request->input('admin_approval')== TRUE ? '1':'0';
		        $product->qty = $request->input('qty');
		        $product->price = $request->input('price');
		        $product->selling_price = $request->input('selling_price');
		        $product->discount_start_date = $request->input('discount_start_date');
		        $product->discount_end_date = $request->input('discount_end_date');
		        $product->is_feature = $request->input('is_feature')== TRUE ? '1':'0';
		        $product->status = $request->input('status') == TRUE ? '1':'0';
		        $product->size = json_encode($request->input('size')) ;
		        $product->color = json_encode($request->input('color')) ;
		        $product->sku = $request->input('sku');
		        $product->dimension = $request->input('dimension');
		        $product->created_by = \Auth::id();
		        $product->images = json_encode($files);
        		
        		// dd($product);

		        $product->save();

            
            $response = array('flag'=>true,'msg'=>$this->singular.' is added sucessfully.','action'=>'reload');
            echo json_encode($response); return;
        }
        $data   = array();
        $data   = array(
            "page_title"=>"Add ".$this->singular,
            "page_heading"=>"Add ".$this->singular,
            "breadcrumbs"=>array("dashboard"=>"Dashboard","#"=>$this->plural." List"),
            "action"=> url('admin/'.$this->action.'/create'),
            "module"=>['type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>'admin/'.$this->action,'db_key'=>$this->db_key]
        );
        $data['list'] = Categories::get()->toArray();
        $data['lists'] = Details::get()->toArray();

        return view($this->view.'create',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCategories  $CourseCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id = NULL)
    {
        $data   = array();
        if($request->isMethod('post')){
            $data = $request->all();
            $this->cleanData($data);
            //image 
            if ($request->hasFile('featured_img')) {
                $sfile=$request->file('featured_img');
                $sfilename=Storage::putFile('/public/upload',$sfile);
                $data['featured_img']=$sfilename;
            }
            $CourseCategories   = Product::find($id);
            // $data['updated_by'] = \Auth::id();
            $CourseCategories->update($data);
            $response = array('flag'=>true,'msg'=>$this->singular.' is updated sucessfully.','action'=>'reload');
            echo json_encode($response); 
            return;
        }
        // echo $id = $id; die;
        $data   = array(
            "page_title"=>"Edit ".$this->singular,
            "page_heading"=>"Edit ".$this->singular,
            "breadcrumbs"=>array("dashboard"=>"Dashboard","#"=>$this->plural." List"),
            "action"=> url('admin/'.$this->action.'/edit/'.$id),
            "module"=>['type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>'admin/'.$this->action,'db_key'=>$this->db_key]
        );        
        $data['row']      = Product::find($id)->toArray();
        $data['list'] = Categories::get()->toArray();
        $data['lists'] = Details::get()->toArray();
        // echo "<pre>";print_r($data['row']);die;
        return view($this->view.'edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseCategories  $CourseCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id = NULL)
    {
        if($request->input('param')){
            $data['is_active'] = $request->input('param');        
            $this->cleanData($data);
            $CourseCategories  = Product::find($id);
            $CourseCategories->update($data);
            $response = array('flag'=>true,'msg'=>$this->singular.' is updated sucessfully.');
            echo json_encode($response); return;
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseCategories  $CourseCategories
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        $item = Product::find($id);
        $item->delete();
        $response = array('flag'=>true,'msg'=>$this->singular.' has been deleted.');
        echo json_encode($response); return;
    }

    // public function view($id) {
    //     $data['view'] = Product::where('id', $id);
    //     return view($this->view.'view',$data);
    // }

    public function view($id)
    {
        $data   = array();
        $data   = array(
            "page_title"=>"Product Detail ",
            "page_heading"=>"Edit ".$this->singular,
            "breadcrumbs"=>array("dashboard"=>"Dashboard","#"=>$this->plural." List"),
            "action"=> url('admin/'.$this->action.'/view/'.$id),
            "module"=>['type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>'admin/'.$this->action,'db_key'=>$this->db_key]
        );        
        $data['row']      = Product::find($id)->toArray();
        return view($this->view.'view',$data);
    }
}