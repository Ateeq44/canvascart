<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class ProductCategoriesController extends Controller
{
    private $type   =  "productcategories";
    private $singular = "ProductCategory";
    private $plural = "Product Categories";
    private $view = "admin.productcategories.";
    private $db_key   =  "id";
    private $action   =  "productcategories";
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
        $records   = new Categories;
        // $records   = $records::with('accessoryType');
        $records   = $this->search($records,$request,$data);
        /*
        GET TOTAL RECORD BEFORE BEFORE PAGINATE
        */

        $data['count']      = $records->count();

        /*
        PAGINATE THE RECORDS
        */
        $records            = $records->paginate($this->perpage);
        $records->appends($request->all())->links();
        $links = $records->links();
        $records = $records->toArray();
                    // print_r($records); die;

        $records['pagination'] = $links;

        /*
        ASSIGN DATA FOR VIEW
        */
        $data['CourseCategories']   =   $records;
        /*
        DEFAUTL VALUES
        */        
        // dd($data['list']);
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

            $cat = new Categories();
            $files = [];
            if($request->hasfile('image'))
            {
                foreach($request->file('image') as $file)
                {
                    $name = time().rand(1,100).'.'.$file->extension();
                    $file->move('public/upload/category', $name);
                    $files[] = $name;
                }
            }
            $cat->title = $request->input('title');
            $cat->slug = $request->input('slug');
            $cat->category_description = $request->input('category_description');
            $cat->top = $request->input('top')== TRUE ? '1':'0';
            $cat->created_by = \Auth::id();
            $cat->image = json_encode($files);

                // dd($product);

            $cat->save();

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
        return view($this->view.'create',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCategories  $CourseCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {

        if($request->isMethod('post')){
            $cat = Categories::find($id);
            $files = [];
            if($request->hasfile('image'))
            {
                foreach($request->file('image') as $file)
                {
                    $name = time().rand(1,100).'.'.$file->extension();
                    $file->move('public/upload/category', $name);
                    $files[] = $name;
                }
            }
            $cat->title = $request->input('title');
            $cat->slug = $request->input('slug');
            $cat->category_description = $request->input('category_description');
            $cat->top = $request->input('top')== TRUE ? '1':'0';
            $cat->created_by = \Auth::id();
            $cat->image = json_encode($files);

            $cat->update();

            $response = array('flag'=>true,'msg'=>$this->singular.' is Updated sucessfully.','action'=>'reload');
            echo json_encode($response); return;
        }



        $data   = array();
        $data   = array(
            "page_title"=>"Edit ".$this->singular,
            "page_heading"=>"Edit ".$this->singular,
            "breadcrumbs"=>array("dashboard"=>"Dashboard","#"=>$this->plural." List"),
            "action"=> url('admin/'.$this->action.'/edit/'.$id),
            "module"=>['type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>'admin/'.$this->action,'db_key'=>$this->db_key]
        );
        $data['category'] = Categories::find($id);
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
            $CourseCategories  = Categories::find($id);
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
        $item = Categories::find($id);
        $item->delete();
        $response = array('flag'=>true,'msg'=>$this->singular.' has been deleted.');
        echo json_encode($response); return;
    }
}
