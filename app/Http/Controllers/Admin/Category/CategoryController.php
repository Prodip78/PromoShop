<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
    	$category=Category::all();
    	return view('admin.category.category',compact('category'));
    }

    public function storeCategory(Request $request){

    	$validatedData = $request->validate([
        'category_name' => 'required|unique:categories|max:55',
          ]);
    	// $data=array();
    	// $data['category_name']=$request->category_name;
    	// DB::table('categories')->insert($data);

    	//$category =new Category();
    	$data['category_name']=$request->category_name;
        $image=$request->file('category_image');
        if ($image) {
            $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path ='image/';
            $image_url=$upload_path.$image_full_name;
            $sucess=$image->move($upload_path,$image_full_name);
            $data['category_image']=$image_url;

            $data['category_image']=$image_url;
            //$category->save($data);
            $category=DB::table('categories')->insert($data);
            //return Redirect()->back()->with($product);
                return back()->with('message', 'Create Successfully');

        }

    }

     public function DeleteCategory($category_id){
    	$category=DB::table('categories')->where('category_id',$category_id)->delete();

    	//return Redirect()->back()->with($category);
        return back()->with('alert', 'Delated successfully!!');

    }
    public function EditCategory($category_id){
    	$category=DB::table('categories')->where('category_id',$category_id)->first();
    	return view('admin.category.edit_category',compact('category')) ;
    }

    public function UpdateCategory(Request $request,$category_id){
     
        $old_image =$request->old_image;
        $data =array();
        $data['category_name']=$request->category_name;
        $image =$request->file('category_image');
        if ($image) {
            unlink($old_image);
            $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path ='image/';
            $image_url=$upload_path.$image_full_name;
            $sucess=$image->move($upload_path,$image_full_name);
            $data['category_image']=$image_url;

            $data['category_image']=$image_url;
            $category=DB::table('categories')->where('category_id',$category_id)->update($data);
            //return Redirect()->back()->with($product);
                   return back()->with('success', 'Updated Successfully!!');
            


    }
}
}