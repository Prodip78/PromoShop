<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\SubCategory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function index()

    {
    	$sub_category_show=DB::table('sub_categories')
    			  ->join('categories','sub_categories.category_id','categories.category_id')
    			  ->select('sub_categories.*','categories.category_name')
    	          ->get();
    	return view('Admin.Category.sub_category',compact('sub_category_show'));
    	// echo "<pre>";
    	// print_r($sub_category_show);
    	// echo "<pre>";
    	// exit();
    }

    public function StoreSubCategory(Request $request){
    	$sub_category =new SubCategory();
    	$sub_category->sub_category_name=$request->sub_category_name;
    	$sub_category->category_id=$request->category_id;
    	$sub_category->description=$request->description;
    	$sub_category->publication_status=$request->publication_status;
        $sub_category->save();

//return Redirect()->back();
    	//return view('Admin.Category.sub_category');

    	// echo "ok";
                return back()->with('message', 'Create Successfully');



    }

    public function DeleteSubCategory($sub_category_id){

    	$sub_category=DB::table('sub_categories')->where('sub_category_id',$sub_category_id)->delete();

    	//return Redirect()->back()->with($sub_category)
                return back()->with('alert', 'Deleted Successfully!!');
        ;
    }

    public function EditSubCategory($sub_category_id){
        $sub_category=DB::table('sub_categories')->where('sub_category_id',$sub_category_id)->first();
        return view('admin.category.edit_sub_category',compact('sub_category')) ;
    }

    public function UpdateSubCategory(Request $request,$sub_category_id){
     
     $data=array();
        $data['sub_category_name']=$request->sub_category_name;
        //$data['category_name']=$request->category_name;
        $data['description']=$request->description;
        $data['publication_status']=$request->publication_status;
        DB::table('sub_categories')->where('sub_category_id',$sub_category_id)->update($data);
        
        //return Redirect()->route('admin.sub_category')->with($data);
       
                return back()->with('success', 'Updated Successfully!!');

    }
}
